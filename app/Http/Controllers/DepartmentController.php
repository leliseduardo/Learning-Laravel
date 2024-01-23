<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Request $request){

        $department = new Department();
        // $department->fill($request->all());
        // $department->save();
        // print_r($department->getAttributes());

        // $department->create($request->all());

        return view('department.index');
    }
}
