<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// route::get('/', function (){
//     return "Hello world";
// });

Route::get('/', [StudentController::class, 'showStudents']);
Route::get('/students/{id}', [StudentController::class, 'singleStudents'])->name('view.students');
Route::get('/add', [StudentController::class, 'addStudent']);
Route::get('/update', [StudentController::class, 'updateStudent']);
Route::get('/delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');
