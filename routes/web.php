<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Au lieu de view('welcome')
});
