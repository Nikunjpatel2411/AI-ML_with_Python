<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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

    // student add page
    public function studentAdd()
    {
        return view('student.add-student');
    }
    
    /** student save record */
    public function studentSave(Request $request)
    {
        // DB::beginTransaction();
        // try {
            $request->validate([
                'first_name'    => 'required|string',
                'last_name'     => 'required|string',
                'gender'        => 'required|not_in:0',
                'date_of_birth' => 'required|string',
                'roll'          => 'required|string',
                'blood_group'   => 'required|string',
                'religion'      => 'required|string',
                'email'         => 'required|email',
                'class'         => 'required|string',
                'section'       => 'required|string',
                'admission_id'  => 'required|string',
                'phone_number'  => 'required',
                'upload'        => 'required|image',

            ]);

            Toastr::success('Has been add successfully :)','Success');
            return redirect()->back();
           
        // } catch(\Exception $e) {
        //     DB::rollback();
        //     Toastr::error('fail, Add new student  :)','Error');
        //     return redirect()->back();
        // }
    }
}
