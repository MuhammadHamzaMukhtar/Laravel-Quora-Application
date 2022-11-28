<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
           dd($posts);
        $comments = Comment::latest()->get();
        //    $likes_count = $posts->feed_likes()->sum('is_liked');
        //    dd($likes_count);
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
    public function update(Request $request, Feed $feed)
    {
        //
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
        // $feed = Feed::where('id', $request['feed_id']);
        // $feed->update([
        //     'likes' => $feed['likes']->increment()
        // ]);
        // return response()->json($data);
    }

    public function storeComment(Request $request, $id)
    {
        Comment::create([
            'user_id' => Auth::user()->id,
            'feed_id' => $id,
            'comment_text' => $request->comment
        ]);

        // Feed_like::create([
        //     'user_id' => Auth::user()->id,
        //     'feed_id' => $id,
        //     'is_commented' => 1
        // ]);


        return redirect()->back();
    }
}
