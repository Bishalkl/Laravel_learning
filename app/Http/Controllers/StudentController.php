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

    public function addStudent(){
        $student = DB::table('students')
                     ->upsert(
                        [
                            "name" => "Another Komal",
                            "email" => "anotheruser@example.com",
                            "age" => 23,
                            "city" => "Mumbai",
                        ],
                        ['email'],
                        ['city']
                     );

        if($student) {
            echo "<h1>Data Successfully Added.</h1>";
        } else {
            echo "<h1>Data not Added</h1>";
        }
    }

    public function updateStudent() {
        $student = DB::table('students')
                      ->where('id', 1)
                      ->update([
                          'city' => 'Khorsane',
                      ]);


        if($student) {
            echo "<h1>Data is updated succesfully.</h1>";
        } else {
            echo "<h1>Data is not updated.</h1>";
        }
    }

    // for delete
    public function deleteStudent(string $id) {
        $student = DB::table('students')
                      ->where('id', $id)
                      ->delete();

        return redirect('/');
    }


}
