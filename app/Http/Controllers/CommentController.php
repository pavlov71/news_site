<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request, Post $post)
    {
        $post->comments()->create($request->validated());
        return redirect(route('post.show', $post));
    }
}
