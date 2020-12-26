@extends('layouts.layout')

@section('content')
  <div class="container">
    <h3>Edit Post</h3>
    <form action="" method="POST">
      @csrf
    <input type="text" name="title" placeholder="Title here" class="form-control" value="{{ $post->title }}">
    <textarea name="body" cols="30" rows="10" placeholder="Your text here" class="form-control my-3">{{ $post->body }}</textarea>
      <button class="btn btn-primary my-3">Edit</button>
    </form>
  </div>

@endsection