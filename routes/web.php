<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// route::get('/', function (){
//     return "Hello world";
// });

Route::get('/', [StudentController::class, 'showStudents']);
