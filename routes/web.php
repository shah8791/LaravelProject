<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('', function (){
    return view('index');
});


Route::get('/form', [EmployeeController::class, 'index']);
Route::post('/form', [EmployeeController::class, 'store']);
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('create.create');
Route::get('/employee', [EmployeeController::class, 'view']);
Route::post('/employee', [EmployeeController::class, 'store']);

Route::get('/employee/view', [EmployeeController::class, 'view']);
Route::get('/employee/delete/{id} ', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
