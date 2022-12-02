<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\CommentLikes;
use App\Models\Feed;
use App\Models\Feed_like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Feed::with('user', 'comments', 'feed_likes')->orderBy('updated_at', 'desc')->get();
        //    dd($posts);
        $comments = Comment::with('children.children')->root()->latest()->get();
        //    $likes_count = $posts->feed_likes()->sum('is_liked');
        //    dd($comments);
        return view('dashboard', compact('posts', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->image) {

            $image = $request->file('image')->getClientOriginalName();

            $request->image->move(public_path('images'), $image);
        }

        Feed::create([
            'user_id' => Auth::user()->id,
            'description' => $request->description ?? NULL,
            'pic' => $image ?? 'NULL'
        ]);

        return redirect()->back()->with('success', 'Success! Post Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->e_pic) {
            $image = $request->file('e_pic')->getClientOriginalName();
            $request->e_pic->move(public_path('images'), $image);
            Feed::find($id)->update([
                'description' => $request->e_description,
                'pic' => $image
            ]);
        }else{
            
            Feed::find($id)->update([
                'description' => $request->e_description,
            ]);
        }


        return redirect()->back()->with('success', 'Post Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feed::find($id)->delete();
        return redirect()->back()->with('error', 'Post Deleted Successfully!');
    }

    public function deleteComment($id)
    {
        Comment::find($id)->delete();
        Comment::where('parent_id', $id)->delete();
        return redirect()->back()->with('error', 'Comment Deleted Successfully!');
    }

    public function deleteReply($id)
    {
        Comment::find($id)->delete();
        return redirect()->back()->with('error', 'Reply Deleted Successfully!');
    }

    public function likes(Request $request)
    {
        $user = Auth::user();
        // $html = $request->status;

        // $feedLike = Feed_like::where(['user_id' => $user['id'], 'feed_id' => $request['feed_id']])->update(['is_liked' => $request['status']]);
        // if (!$feedLike) {

        //     Feed_like::create([
        //         'user_id' => $user['id'],
        //         'feed_id' => $request['feed_id'],
        //         'is_liked' => $request['status']
        //     ]);
        // }
        // echo $html;
        $feedLike = Feed_like::where(['user_id' => $user['id'], 'feed_id' => $request['feed_id']])->update(['is_liked' => $request['status']]);
        if(!$feedLike){

            $data = new Feed_like();
            $data->feed_id = $request->post;
            $data->user_id = $user['id'];
            if($request->type == 'like'){
                $data->is_liked = 1;
            }else{
                $data->dislike = 1;
            }
            $data->save();
        } else {
            
        }

        return response()->json([
            'bool' => true
        ]);

    }

    public function comment_likes(Request $request)
    {
        $user = Auth::user();
        $commentLike = CommentLikes::where(['user_id' => $user['id'], 'comment_id' => $request['comment_id']])->update(['is_liked' => $request['status']]);
        if (!$commentLike) {

            CommentLikes::create([
                'user_id' => $user['id'],
                'comment_id' => $request['comment_id'],
                'is_liked' => $request['status']
            ]);

        }
    }

    public function child_comment_likes(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $commentLike = CommentLikes::where(['user_id' => $user['id'], 'comment_id' => $request['child_comment_id']])->update(['is_liked' => $request['status']]);
        if (!$commentLike) {

            CommentLikes::create([
                'user_id' => $user['id'],
                'comment_id' => $request['child_comment_id'],
                'is_liked' => $request['status']
            ]);
        }
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        Comment::create([
            'user_id' => Auth::user()->id,
            'feed_id' => $id,
            'comment_text' => $request->comment
        ]);

        return redirect()->back()->with('success', 'Comment Added Successfully!');
    }

    public function addReply(Request $request, $comment_id, $post_id)
    {
        // dd($comment_id, $post_id);
        $request->validate([
            'reply' => 'required'
        ]);

        Comment::create([
            'user_id' => Auth::user()->id,
            'feed_id' => $post_id,
            'comment_text' => $request->reply,
            'parent_id' => $comment_id
        ]);

        return redirect()->back()->with('success', 'Reply Added Successfully!');
    }

    public function editComment(Request $request, $id)
    {
        Comment::find($id)->update([
            'comment_text' => $request->e_comment
        ]);

        return redirect()->back()->with('success', 'Comment Updated Successfully!');
    }

    public function editReply(Request $request, $id)
    {
        Comment::find($id)->update([
            'comment_text' => $request->e_reply
        ]);

        return redirect()->back()->with('success', 'Reply Updated Successfully!');
    }
}
