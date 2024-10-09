<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = "Onyedikachi Cyprian";
    $reg = "0102307272";

    return view('welcome', compact("name", "reg"));
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/landing', function(){
    return view("landing");
});

Route:: get('/practice', function(){
    return view('practice');
});


Route:: get('/grid', function(){
    return view('grid');
});

Route:: get('/newpage', function(){
    return view('newpage');
});
