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
       $posts = Feed::with('user', 'comments')->whereHas('user')->orderBy('updated_at', 'desc')->get();
    //    dd($posts);
       return view('dashboard', compact('posts'));
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
        if($request->image){

            $image = $request->file('image')->getClientOriginalName();

            $request->image->move(public_path('images'), $image);
        }

        Feed::create([
            'user_id' => Auth::user()->id,
            'description' => $request->description,
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
        $data = Feed_like::create([
            'user_id' => Auth::user()->id,
            'feed_id' => $request['feed_id'],
            'is_liked' => 1
        ]);
        return response()->json($data);
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
}
