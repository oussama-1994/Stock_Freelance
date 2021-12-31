<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('students', [StudentController::class, 'index']);

Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

Route::get('ajaxdata', [\App\Http\Controllers\AjaxdataController::class,'index'])->name('ajaxdata');
Route::get('ajaxdata/getdata', [\App\Http\Controllers\AjaxdataController::class,'getdata'])->name('ajaxdata.getdata');

Route::post('ajaxdata/postdata',  [\App\Http\Controllers\AjaxdataController::class,'postdata'])->name('ajaxdata.postdata');

Route::get('ajaxdata/fetchdata', [\App\Http\Controllers\AjaxdataController::class,'fetchdata'])->name('ajaxdata.fetchdata');

