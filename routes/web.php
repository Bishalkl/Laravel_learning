<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// View method and pass the array
Route::view('/', "home", ['name' => 'Bishal koirala.'])->name("home");


// Required parameter
Route::get('/login/{user_id}', function($user_id) {
    return ($user_id);
})->where('user_id', '[0-9]+')->name("login");

// Route group
Route::prefix("user")->middleware("guest")->group(function () {
    Route::view('/users', "users", ['name' => 'Bishal koirala.'])->name("users");
});

// route create
Route::get("search", function(Request $request) {
    dd($request->q);
});

