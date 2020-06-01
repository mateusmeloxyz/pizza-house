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

        return view('pizzas',[
            'pizzas' => $pizzas
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
