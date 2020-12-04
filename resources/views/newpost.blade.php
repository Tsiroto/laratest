@extends('layouts.layout')

@section('content')
  <div class="container">
    <form action="" method="POST">
      @csrf
      <input type="text" name="title" placeholder="Title here" class="form-control">
      <textarea name="body" cols="30" rows="10" placeholder="Your text here" class="form-control my-3"></textarea>
      <button class="btn btn-primary my-3">Create Post</button>
    </form>
  </div>
@endsection