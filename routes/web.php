<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/add', function () {
    return view('add');
});
// http://localhost:5173/