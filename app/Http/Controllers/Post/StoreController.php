<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([

            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        //  dd($data);

        $tags = $data['tags'];

        //     dd($tags);

        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');


    }
}
