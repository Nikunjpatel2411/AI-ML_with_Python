<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // index page student
    public function student()
    {
        return view('student.student');
    }

    // index page student grid
    public function studentGrid()
    {
        return view('student.student-grid');
    }
}
