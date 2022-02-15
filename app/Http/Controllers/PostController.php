<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index() {

$posts = Post::all();

 return view('post.index', compact('posts'));

// dump($posts->title);

//      dd('end');
          }

    public function create() {

       return view('post.create');

    }

    public function store(){

       $data = request()->validate([

           'title'=> 'string',
           'content'=> 'string',
           'image'=> 'string',
       ]);

  Post::create($data);

  return redirect()->route('post.index');

    }

    public function show(Post $post) {

    return view('post.show', compact('post'));

    }

public function edit(Post $post) {

       return view('post.edit', compact('post'));

}

    public function update(Post $post) {

        $data = request()->validate([

            'title'=> '',
            'content'=> '',
            'image'=> '',
        ]);
      $post->update($data);
      return redirect()->route('post.show', $post->id);
    }

    public function delete() {

        $post = Post::withTrashed()->find(2);

       //  dump($post->content);

        $post->restore();

        dd('deleted');

    }

  public function destroy(Post $post) {

     $post->delete();
     return redirect()->route('post.index');
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

