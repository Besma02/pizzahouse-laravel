@extends('layouts.app')
@section('content')
<div class="flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
    
    <div class="container">
    <h1 class="title">All Pizzas</h1>
   
    <table>
    <thead>
        <tr>
            <td>N°</td>
            <td>name</td>
            <td>type</td>
            <td>base</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pizzas as $pizza)
        <tr>
        <td><a href="{{route('pizza.show',$pizza->id)}}">{{$pizza->id}}</a></td>
            <td>{{$pizza->name}}</td>
            <td>{{$pizza->type}}</td>
            <td>{{$pizza->base}}</td>
        </tr>
        @endforeach
    </tbody>
        </table>
    </div>
</div>

@endsection