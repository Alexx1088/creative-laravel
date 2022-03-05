<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Post1;
use Illuminate\Http\Request;
use function Spatie\Ignition\ErrorPage\title;
=======
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

//use phpDocumentor\Reflection\DocBlock\Tag;
use App\Models\Tag;

>>>>>>> 8b78afce37d08285ed1b47ab61c7846ccb44786d

class PostController extends Controller
{
    public function index()
    {
<<<<<<< HEAD

        $posts = Post1::where('likes', 30)->get();

        dump($posts);
=======
/*
        $post = Post::find(1);

        dd($post->category);*/

          /*  $category = Category::find(1);
              dd($category->posts);*/

                $posts = Post::all();
             ///   dd($posts);*/
        dd($posts->tags);

   /*     $tag = Tag::find(1);
        dd($tag->posts);*/


        return view('post.index', compact('posts'));

>>>>>>> 8b78afce37d08285ed1b47ab61c7846ccb44786d
    }

    public function create()
    {
<<<<<<< HEAD

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
=======
        $categories = Category::all();

        $tags = Tag::all();

        //  dd($tags);

        return view('post.create', compact('categories', 'tags'));

    }

    public function store()
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

        unset($data['tags']);

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
            'category_id' => '',
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

>>>>>>> 8b78afce37d08285ed1b47ab61c7846ccb44786d
    }


}

