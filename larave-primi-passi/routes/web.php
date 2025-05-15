<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

$informazioni = "testo vario";

    return view('home',compact("informazioni"));
})->name('home');

Route::get('/profilo', function(){

    return view('profilo');
})->name('profilo');

Route::get('/about', function(){

    return view('about');
})->name('about');