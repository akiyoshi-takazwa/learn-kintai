<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\Employee\EmployeeController;

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

Route::get('/',       [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.post');



Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('backend.home.home');
    })->name('home');


    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employee.store');
});
