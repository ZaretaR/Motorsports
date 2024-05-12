<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function index() {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}

class Comment extends Model
{
    use HasFactory;

    public function post() {
        return $this->belongsTo(Post::class);
    }
}