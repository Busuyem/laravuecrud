<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function allStudents()

    {
        $students = Student::orderBy('created_at', 'DESC')->get();

        return response()->json(['students'=>$students]);
    }
    
    public function addStudent(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();

        return $student;
    }
}
