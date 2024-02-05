<?php

use Illuminate\Support\Facades\Route;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/attendance',[\App\Http\Controllers\AttendanceController::class,'index'])->name('attendance');
Route::get('/uploadattendance',[\App\Http\Controllers\AttendanceController::class,'create'])->name('uploadattendance');

Route::post('import', function () {
    Excel::import(new UsersImport, request()->file('file'));
    return redirect()->route('attendance')->with('success','Data Imported Successfully');
});

