<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){

        return view('department.index');
    }

    public function post(Request $request){
        
        $department = new Department();

        $department->create($request->all());

        return redirect()->route('department.index');
    }
}
