<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // public function displayPosts($post_id){
    //     $posts = Post::find($post_id);
    //     return view('posts.display', compact('posts'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation code
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $postStore = new Post();
        $postStore->title = $request->title;
        $postStore->description = $request->description;
        $postStore->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.display', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $editPost = Post::find($post);
        return view('posts.edit', compact('editPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->save();

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $updatePost = Post::find($post);
        $updatePost->title = $request->title;
        $updatePost->description = $request->description;
        $updatePost->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $deletedPost = Post::find($post);
        // $deletedPost->delete();
        $post->delete();
        return redirect()->route('home');
    }
}
