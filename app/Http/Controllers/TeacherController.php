<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Teacher;
use Brian2694\Toastr\Facades\Toastr;

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
            'password_confirmation' => 'required',
            'address'         => 'required|string',
            'city'            => 'required|string',
            'state'           => 'required|string',
            'zip_code'        => 'required|string',
            'country'         => 'required|string',
        ]);

        try {
        
            $dt        = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();
            
            $saveRecord = new Teacher;
            $saveRecord->full_name     = $request->full_name;
            $saveRecord->gender        = $request->gender;
            $saveRecord->date_of_birth = $request->date_of_birth;
            $saveRecord->mobile        = $request->mobile;
            $saveRecord->joining_date  = $request->joining_date;
            $saveRecord->qualification = $request->qualification;
            $saveRecord->experience    = $request->experience;
            $saveRecord->username      = $request->username;
            $saveRecord->address       = $request->address;
            $saveRecord->city          = $request->city;
            $saveRecord->state         = $request->state;
            $saveRecord->zip_code      = $request->zip_code;
            $saveRecord->country       = $request->country;
            $saveRecord->save();
        
            User::create([
                'name'      => $request->full_name,
                'email'     => $request->email,
                'join_date' => $todayDate,
                'role_name' => 'Teacher',
                'password'  => Hash::make($request->password),
            ]);
            Toastr::success('Has been add successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('fail, Add new record  :)','Error');
            return redirect()->back();
        }
    }
}
