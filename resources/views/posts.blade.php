@extends('layouts.layout')

@section('content')
  <div class="container d-flex flex-column align-items-center justify-content-center">
    <h2>Posts!</h2>
    @foreach ($posts as $post)
      @include('includes.post')
    @endforeach
  </div>
@endsection