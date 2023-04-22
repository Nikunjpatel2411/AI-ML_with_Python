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

    /** teacher list */
    public function teacherList()
    {
        return view('teacher.list-teachers');
    }

    /** save record */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'full_name'       => 'required|string',
            'gender'          => 'required|string',
            'date_of_birth'   => 'required|string',
            'mobile'          => 'required|string',
            'joining_date'    => 'required|string',
            'qualification'   => 'required|string',
            'experience'      => 'required|string',
            'username'        => 'required|string',
            'email'           => 'required|string',
            'password'        => 'required|string|min:8|confirmed',
            'repeat_password' => 'required',
            'address'         => 'required|string',
            'city'            => 'required|string',
            'state'           => 'required|string',
            'zip_code'        => 'required|string',
            'country'         => 'required|string',
        ]);
        
    }
}
