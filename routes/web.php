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

Route::get('/pizzas', function () {
    // get data from database
    $pizza = [
        'type' => 'hawaiian', 
        'base' => 'cheesy crust',
        'price' => 10
    ];
    return view('pizzas',$pizza);
    // can also return text or json
    // return 'pizzas!';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];
});

/**
 * Route is a class that has a get() method
 * get takes 2 arguments: 
 * 1-the rout acording to the root webpage. Ex:
 * www.mywebapp.com/
 * 
 * 2-a function returning a view that is located in the resources/views folder
 * 
 */