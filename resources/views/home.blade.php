@extends('layouts.layout')

@section('content')

<div class="container d-flex flex-column">
  <h2>Home</h2>
  <h4 class="text-center mb-5">Laravel test project</h4>
  
<a href="{{ route('posts')}}" class="text-center text-dark">Check our Posts!</a>

<div>
@endsection
