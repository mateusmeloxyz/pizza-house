<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza; //to include pizza model into this controller

class PizzaController extends Controller
{
    public function index(){
        // get data from database
        //$pizzas = Pizza::all(); // all is an standard method that comes with every eloquent model
        //$pizzas = Pizza::orderBy('name', 'desc')->get(); //a way to fetch from database with an orderby
        //$pizzas = Pizza::where('type','hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index',[
            'pizzas' => $pizzas
        ]);
    }

    public function show($id) {
        
        $pizza = Pizza::findOrFail($id); //looks for id, returns fail if not found

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        
        $pizza = new Pizza(); // creating a new instance of a Pizza model

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');

        $pizza->save(); // a method that saves in the database

        return redirect('/')->with('mssg','Thanks for your order');
    }
}
