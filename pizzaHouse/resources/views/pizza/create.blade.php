@extends('layouts.app')
@section('content')
<div class="flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
    
    <div class="">
    <h1 class="title">Add a Pizza</h1>
    <form action="/pizzas" method="post" class="form">
        @csrf  
        <label for="name">Name</label>
        <input type="text" name="name" class="info" >
        <label for="type">Type</label>
        <select name="type" >
            <option value="ton">ton</option>
            <option value="sea fruit">sea fruit</option>
            <option value="cheese pizza">cheese pizza</option>
            <option value="garlic pizza">garlic picrispyzza</option>
        </select>
        <label for="base">Base</label>
        <select name="base" >
            <option value="crispy">crispy</option>
            <option value="thiny">thiny</option>
            <option value="cheesy">cheesy</option>
            <option value="garlic">garlic</option>
        </select>
        <br>
      
        <input type="checkbox" name="toppings[]" value="mashroom">mashroom
        <input type="checkbox" name="toppings[]" value="pepper">pepper
        <input type="checkbox" name="toppings[]" value="tomato">tomato
        <input type="checkbox" name="toppings[]" value="olives">olives
        <br>
        <br>
        <input  class ='bouton'type="submit" name="submit" value="order a pizza">
        
    </form>
   
   
    </div>
</div>

@endsection