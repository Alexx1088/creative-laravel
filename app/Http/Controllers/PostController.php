<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index() {

$posts = Post::all();

 return view('post', compact('posts'));

// dump($posts->title);

//      dd('end');
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
public function first_or_create() {
 //$post = Post::find(1);

 $anotherPost = ['title' => 'some post',
            'content' => 'some content',
            'image' => 'some_image.jpg',
            'likes' => '5000',
            'is_published' => '0',];

$post = Post::firstOrCreate(
    ['title' => 'some title for phpstorm'],

     ['title' => 'someq title phpstorm',
         'content' => 'someq content',
         'image' => 'someq_image.jpg',
         'likes' => '5000',
         'is_published' => '0',
 ]);

dump($post->title);
dd('finished');
}

public function updateOrCreate() {

       $anotherPost = ['title' => 'update or create some title',
           'content' => 'update or create some content',
           'image' => 'update or create some image.jpg',
           'likes' => '15000',
           'is_published' => '1'];

       $post = Post::updateOrCreate(
           ['title' => 'blabla', ],

           [
           'title' => ' bla title not phpstorm',
           'content' => 'its not update some content',
           'image' => 'its not update some image.jpg',
           'likes' => '100',
           'is_published' => '1'
       ]);

       dump($post->content);
   dd('danunah');

}


}

