<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    print "Hola, soy Ivan R. Chenoweth. Este framework de laravel 11 ya esta funcionando";
    return view('welcome');
});
