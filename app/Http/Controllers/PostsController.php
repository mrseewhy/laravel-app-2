<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('updated_at', 'desc')->get();

        return view('posts', ['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post();


        $validated = $request->validate([
            'title' => 'required|min:5|unique:posts|max:255',
            'body' => 'required|min:20',
        ]);

        $post->title  = $request->title;
        $post->body  = $request->body;
        $post->save();

        $request->session()->flash('status', 'blog post have been created');

        return redirect("/post/$post->id");
        // return redirect()->route('post.show', ['post'=> $post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);


        $validated = $request->validate([
            'title' => 'required|min:5|unique:posts|max:255',
            'body' => 'required|min:20',
        ]);

        $post->title  = $request->title;
        $post->body  = $request->body;
        $post->save();

        $request->session()->flash('status', 'blog post have been edited');

        return redirect("/post/$post->id");
        // return redirect()->route('post.show', ['post'=> $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        session()->flash('status', 'blog post have been deleted');
        return redirect('/post');
    }
}
