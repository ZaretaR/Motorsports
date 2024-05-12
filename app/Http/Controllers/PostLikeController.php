<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function like(Post $post)
    {
        $post->likes()->attach(auth()->user()->id);
        return back();
    }

    public function unlike(Post $post)
    {
        $post->likes()->detach(auth()->user()->id);
        return back();
    }
}