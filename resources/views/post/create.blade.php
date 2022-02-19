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
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image"  placeholder="image">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
@endsection