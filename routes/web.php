<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Controller::class, function(){return view('welcome');}]);
Route::prefix('/')->group(function(){
    Route::get('employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
    Route::get('task', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index');
    Route::get('department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');
    
    Route::post('employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
    Route::post('task', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index');
    Route::post('department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');
});
