<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        // var_dump($_GET);
        return view('employee.index');
    }
}
