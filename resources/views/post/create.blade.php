@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
         {{--   @method('get')--}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title"  placeholder="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content"  placeholder="content">
                </textarea>
            </div>

            <div class="form-group">
                <label for="image" >Image</label>
                <input type="text" name="image" class="form-control" id="image"  placeholder="image">
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
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>

                </select>
            </div>






            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>

    </div>
@endsection