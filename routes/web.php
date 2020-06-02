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

Route::get('/pizzas', 'PizzaController@index')->middleware('auth'); // ->middleware requires auth to show this route
Route::get('/pizzas/create', 'PizzaController@create'); // must come before id route so that create isn't treated as an id
Route::post('/pizzas', 'PizzaController@store');
Route::get('/pizzas/{id}', 'PizzaController@show')->middleware('auth');;
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->middleware('auth');;

Auth::routes([
    'register' => false // this disable register routes so that only staff members can login
]); // generates routes behind the scene for Auth views

Route::get('/home', 'HomeController@index')->name('home');