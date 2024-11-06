<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class PostPublicController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $userId = Auth::id();
        $user = User::where('id', $userId)->first();

        return view('posts.index', compact('posts', 'user'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
