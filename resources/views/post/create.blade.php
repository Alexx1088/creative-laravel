@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            {{--   @method('get')--}}

            <div class="form-group">
                <label for="title">Title</label>
                <input
                  value="{{old('title')}}"

                        type="text" name="title" class="form-control" id="title" placeholder="title">
                @error('title')
                <p class="text-danger mt-3">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">

                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="content">
                    {{old('content')}} </textarea>
                @error('content')
                <p class="text-danger mt-3">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input
                        value="{{old('image')}}"
                        type="text" name="image" class="form-control" id="image" placeholder="image">
                @error('image')
                <p class="text-danger mt-3">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="category" class="mt-3 mb-3">Category</label>
                <select class="form-control" id="category" name="category_id">

                    @foreach($categories as $category)

                        <option value="{{$category->id}}">{{$category->title}}</option>

                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach($tags as $tag)

                        <option value="{{ $tag->id }}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>

    </div>
@endsection