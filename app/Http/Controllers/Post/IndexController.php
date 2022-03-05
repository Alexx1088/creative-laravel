<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $posts = Post::all();
        return view('post.index', compact('posts'));

    }
}

