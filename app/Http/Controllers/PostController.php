<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index() {
/*
       $posts = Post::all();

       foreach ($posts as $post) {

           dump($post->image);
       }*/

      // dd($posts);

      /* $post = Post::where('is_published', 0)->first();

       dump($post->title);*/

       $posts = Post::where('is_published', 0)->get();

       foreach ($posts as $post) {

      dump($post->title);
      // echo    gettype($posts);

       }

    /*   foreach ($post as $post) {
          dump($post->content);
       }*/

    //   dump($post->title);


     //  dd('end');
          }

    public function create() {

       $postsArr = [

           ['title' => 'title of post from phpstorm',
           'content' => 'some interesting content',
           'image' => 'imageblabla.jpg',
           'likes' => '25',
           'is_published' => '1',
       ],

           ['title' => 'another title of post from phpstorm',
               'content' => 'another some interesting content',
               'image' => 'another imageblabla.jpg',
               'likes' => '55',
               'is_published' => '1',
           ]
];
       foreach ($postsArr as $item) {
           Post::create($item);
       }

      /* Post::create([
           'title' => 'another title of post from phpstorm',
           'content' => 'another some interesting content',
           'image' => 'another imageblabla.jpg',
           'likes' => '55',
           'is_published' => '1',
                  ]);*/
       dd('created');
    }

    public function update() {

       $post = Post::find(11);

    // dump($post->content);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => '1000',
            'is_published' => '0',
        ]);

        dd('updated');

    }

    public function delete() {

        $post = Post::withTrashed()->find(2);

       //  dump($post->content);

        $post->restore();

        dd('deleted');

    }

}

