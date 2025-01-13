<?php

use Illuminate\Support\Facades\Route;



// Get route example
Route::get('/', function () {
    return view('home');
})->name("home");

// Get route example
Route::get('/about', function () {
    return view('about');
})->name("about");

// Get contact route
Route::get('/contact', function() {
    return view('contact');
})->name("contact");


