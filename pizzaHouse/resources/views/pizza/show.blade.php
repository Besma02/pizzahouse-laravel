@extends('layouts.app')
@section('content')
<div class="flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
    
    <div >
    <h1 class="title">Pizza Details</h1>
    
    <div class="card">
    <img src="{{asset('assets/img/pizza.png')}}" alt="pizza" class="img">
        <h3>{{$pizza->name}}</h3>
        <p>{{$pizza->type}}</p>
        <p>{{$pizza->base}}</h3>
        <div>
            <h2>Toppings</h2>
            <ul>
                @foreach($pizza->toppings as $topping)
                <li class='top'>{{$topping}}</li>
                @endforeach
            </ul>
        </div>
       
        <form action="{{route('pizza.destroy',$pizza->id)}}" method="post">
            @method('delete')
            @csrf
            <input class='bouton' type="submit" name="submit" value="delete">
        </form>
        <br>
        <br>
        <a class="back" href="/pizzas">-->all pizzas</a>
    </div>
   
    </div>
</div>

@endsection