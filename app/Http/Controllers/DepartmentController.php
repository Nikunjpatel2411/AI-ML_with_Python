<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /** index page department */
    public function indexDepartment()
    {
        return view('department.add-department');
    }
    
    /** edit record */
    public function editDepartment()
    {
        return view('department.edit-departmen');
    }
}
