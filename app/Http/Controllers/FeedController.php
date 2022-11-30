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

        return redirect()->back();
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


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
    }

    public function likes(Request $request)
    {
        $user = Auth::user();
        $feedLike = Feed_like::where(['user_id' => $user['id'], 'feed_id' => $request['feed_id']])->update(['is_liked' => $request['status']]);
        if (!$feedLike) {

            Feed_like::create([
                'user_id' => $user['id'],
                'feed_id' => $request['feed_id'],
                'is_liked' => $request['status']
            ]);
        }
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
        $commentLike = CommentLikes::where(['user_id' => $user['id'], 'comment_id' => $request['comment_id']])->update(['is_liked' => $request['status']]);
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
        Comment::create([
            'user_id' => Auth::user()->id,
            'feed_id' => $id,
            'comment_text' => $request->comment
        ]);

        return redirect()->back();
    }

    public function addReply(Request $request, $comment_id, $post_id)
    {
        // dd($comment_id, $post_id);
        Comment::create([
            'user_id' => Auth::user()->id,
            'feed_id' => $post_id,
            'comment_text' => $request->reply,
            'parent_id' => $comment_id
        ]);

        return redirect()->back();
    }
}
