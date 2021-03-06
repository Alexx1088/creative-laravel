<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

//use phpDocumentor\Reflection\DocBlock\Tag;
use App\Models\Tag;


class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('post.index', compact('posts'));

    }

    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

      //  dd($tags);

        return view('post.create', compact('categories','tags'));

    }

    public function store()
    {
        $data = request()->validate([

            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags'=> '',
        ]);

        //  dd($data);

        $tags = $data['tags'];

        unset($data['tags'] );

      $post = Post::create($data);

$post->tags()->attach($tags);

        return redirect()->route('post.index');

    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));

    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('post.edit', compact('post', 'categories', 'tags'));

    }

    public function update(Post $post)
    {

        $data = request()->validate([

            'title' => '',
            'content' => '',
            'image' => '',
            'category_id'=> '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);


        $post->update($data);

     // $post = $tags()->sync($tags);

   //  $post = $post->fresh();

        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {

        $post = Post::withTrashed()->find(2);

        //  dump($post->content);

        $post->restore();

        dd('deleted');

    }

    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('post.index');
    }


    public function first_or_create()
    {
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

    public function updateOrCreate()
    {

        $anotherPost = ['title' => 'update or create some title',
            'content' => 'update or create some content',
            'image' => 'update or create some image.jpg',
            'likes' => '15000',
            'is_published' => '1'];

        $post = Post::updateOrCreate(
            ['title' => 'blabla',],

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

