@extends('layouts.base')
@section('content')
<div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
   <div class="container">
<img src="{{asset('assets/img/pizza.jpg')}}" alt="img">
    <div class="mssg">
      @if(session()->has('mssg'))
      <p>{{session()->get('mssg')}}</p>
      @endif
</div>
  <h1 class="title">Pizza House </h1>
  <a class="link" href="{{route('pizzas.create')}}">Order pizzas!</a>
  </div>
</div>

@endsection