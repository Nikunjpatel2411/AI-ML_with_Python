<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Student;
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
        DB::beginTransaction();
        try {
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

            $upload = $request->file('upload');
            $upload_file = rand() . '.' . $upload->getClientOriginalExtension();
            $upload->move(public_path('/student-photos/'), $upload);

            $student = new Student;
            $student->first_name   = $request->first_name;
            $student->last_name    = $request->last_name;
            $student->gender       = $request->gender;
            $student->date_of_birth= $request->date_of_birth;
            $student->roll         = $request->roll;
            $student->blood_group  = $request->blood_group;
            $student->religion     = $request->religion;
            $student->email        = $request->email;
            $student->class        = $request->class;
            $student->section      = $request->section;
            $student->admission_id = $request->admission_id;
            $student->phone_number = $request->phone_number;
            $student->upload = $upload_file;
            $student->save();

            Toastr::success('Has been add successfully :)','Success');
            DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new student  :)','Error');
            return redirect()->back();
        }
    }
}
