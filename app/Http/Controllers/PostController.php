<?php

namespace App\Http\Controllers;

use App\Models\Post1;
use Illuminate\Http\Request;
use function Spatie\Ignition\ErrorPage\title;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post1::where('likes', 30)->get();

        dump($posts);
    }

    public function create()
    {

        $postsArr = [

            ['title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            ['title' => 'another title of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblabla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ]

        ];

     foreach ($postsArr as $item) {

      // dd($item);
       Post1::create($item);

     }
dd('created');
    }


}

