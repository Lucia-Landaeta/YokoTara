<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::where('status_id',1)->latest('date_publish')->take(8)->get();

        return view('welcome',compact('posts'));
    }
}
