<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $department = new Department();

        return view('employee.index')->with('departments', $department->all());
    }

    public function post(Request $request){
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'department_id' => 'required|exists:departments,id',
        ]);

        $employee = new Employee();
        $employee->create($request->all());

        return redirect()->route('employee.index');
    }
}
