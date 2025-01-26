<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents() {
        $students = DB::table('students')->get();
        //  dd($users); //dd for the test debug information
        // code stop now because of dd
        return view('allstudents', ['data' => $students]);
    }

    public function singleStudents(string $id) {
        $students = DB::table('students')->where('id', $id)->get();
        return view('singleStudents', ['data' => $students]);
    }
}
