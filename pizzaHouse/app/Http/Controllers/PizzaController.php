<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index(){

    $pizzas=Pizza::all();
  
    return view('pizza.index',compact('pizzas'));

}
public function create(){

    return view('pizza.create');
}
public function store(){
 $pizza=new Pizza();
 $pizza->name=request('name');
 $pizza->type=request('type');
 $pizza->base=request('base');
 $pizza->toppings=request('toppings');
 $pizza->save();
return redirect('/')->with('mssg','thanks for order');
}
public function show($id){
    $pizza=Pizza::findOrFail($id);
   
   return view('pizza.show',compact('pizza'));

}
public function destroy($id){
    $pizza=Pizza::findOrFail($id);
    $pizza->delete();
   
   return redirect('/pizzas');

}
}
