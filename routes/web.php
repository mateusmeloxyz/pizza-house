<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzaController@index');

Route::get('/pizzas/create', 'PizzaController@create'); // must come before id route so that create isn't treated as an id

Route::post('/pizzas', 'PizzaController@store');

Route::get('/pizzas/{id}', 'PizzaController@show');

Route::delete('/pizzas/{id}', 'PizzaController@destroy');



/**
 * Route is a class that has a get() method
 * get takes 2 arguments: 
 * 1-the rout acording to the root webpage. Ex:
 * www.mywebapp.com/
 * 
 * 2-a function returning a view that is located in the resources/views folder
 * 
 */