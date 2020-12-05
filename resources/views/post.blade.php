@extends('layouts.layout')

@section('content')
  <div class="container text-center my-5">
    <h3 class="text-dark">{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
  </div>
@endsection