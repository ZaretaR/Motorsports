<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return view('posts.index', [
            'posts' => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        return view('posts.create', [
            'post' => $post,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post();
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $fileName);
            $post->picture = $fileName;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect('/posts' . $post->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::find($id);
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $fileName);
            $post->picture = $fileName;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect('/posts' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}