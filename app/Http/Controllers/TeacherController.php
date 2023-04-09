<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /** add teacher page */
    public function teacherAdd()
    {
        return view('teacher.add-teacher');
    }
}
