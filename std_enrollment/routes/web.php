<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmintblController;
use App\Http\Controllers\AddstudentController;
use App\Http\Controllers\AllstudentController;
use App\Http\Controllers\bbaController;
use App\Http\Controllers\cseController;
use App\Http\Controllers\pharmacyController;
use App\Http\Controllers\StdEnrollController;
use App\Http\Controllers\StdinfotblController;
use App\Http\Controllers\StudenttblController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\adminprofile;
use App\Http\Controllers\adminsettings;


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

Route::get('/', function () {
    return view('studentlogin');
});

Route::get('/admin', function () {
    return view('admin/adminlogin');
});

// Admin Login
Route::post('/adminlogin', [AdmintblController::class, 'adminlogin']);
Route::get('/adminDashboard', [AdmintblController::class, 'adminDashboard']);
Route::get('/adminprofile', [adminprofile::class, 'adminprofile']);
Route::get('/adminsettings', [adminsettings::class, 'adminsettings']);

//Add Student
Route::get('/addstudent', [AddstudentController::class, 'addstudent']);
Route::post('/save_student', [AddstudentController::class, 'store']);

//All Pages
Route::get('/allstudent', [AllstudentController::class, 'studentlist']);
Route::get('/tuitionfee', [tutionController::class, 'tuitionfee']);
Route::get('/cse', [cseController::class, 'cseStudents']);
Route::get('/bba', [bbaController::class, 'bba']);
Route::get('/pharmacy', [pharmacyController::class, 'pharmacy']);
Route::get('/result', [resultController::class, 'result']);
Route::get('/result', [resultController::class, 'result']);


//Logout
Route::get('/logout', [AdmintblController::class, 'logout']);