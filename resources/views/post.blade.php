@extends('layouts.layout')

@section('content')
  <div class="container text-center my-5">
    <h3 class="text-dark">{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
    <a href="{{ route('post.edit', $post)}}"><button class="btn btn-primary">Edit Post</button></a>
    <a href="{{ route('post.delete', $post)}}"><button class="btn btn-danger">Delete Post</button></a>
  </div>
@endsection