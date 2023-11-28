<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $similar = Post::where('id', '!=', $post->id)
            ->where('status_id', 1)
            ->where('type', $post->type)
            ->where('locality_id', $post->locality_id)
            ->latest('id')->take(6)->get();
        return view('posts.show', compact('post','similar'));
    }
}
