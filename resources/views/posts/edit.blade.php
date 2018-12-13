@extends('layouts.main')

@section('title', 'All Posts')

@section('sidebar')
  This is the side menu
@endsection

@section('content')
  <form action="/posts/{{$post->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <h1>Edit post</h1>
    <hr>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" placeholder="Content">{{$post->content}}</textarea>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <select class="form-control" name="category_id">
      @foreach ($categories as $category) selected
        @if($category->id == $post->category_id)
        <option value="{{$category->id}}" selected
        >{{$category->name}}</option>
      @else
        <option value="{{$category->id}}"
        >{{$category->name}}</option>
      @endif
      @endforeach
    </select>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
