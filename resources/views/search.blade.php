@extends('layouts.layout')

@section('content')
  <div class="container mt-5">
  <h2 class="text-center">Your Search: </h2>
  <h3 class="text-center"> {{ $q }} </h3>
  </div>
@endsection