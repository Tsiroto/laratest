@extends('layouts.layout')

@section('content')
  <div class="container">
    <h2>Posts!</h2>
    @foreach ($posts as $post)
      @include('includes.post')
    @endforeach
  </div>
@endsection