<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //you can connect to a table by creating a protected property
    //protected $table = 'some_name';

    protected $casts = [
        'toppings' => 'array' // takes an array and automatically casts into a json string to fit table
    ];
}
