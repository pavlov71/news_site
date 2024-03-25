<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->limit(6)->get();
        return view('welcome', compact('posts'));
    }

//    public function show(Request $request, Post $post)
//    {
//        return view ('posts_show');
//    }
}
