<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StockController;
use \App\Http\Controllers\PrevisionController;


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
Route::get('/', function (){
    return view('welcome');
} );

Route::get('stocks', [StockController::class,'index'])->name('ajaxdata');
Route::get('stocks/getdata', [StockController::class, 'getData'])->name('ajaxdata.getdata');
Route::post('stocks/postdata',  [StockController::class, 'postData'])->name('ajaxdata.postdata');
Route::get('stocks/fetchdata', [StockController::class, 'fetchData'])->name('ajaxdata.fetchdata');


Route::get('prevision', [PrevisionController::class,'index'])->name('prevision');
Route::get('prevision/getdata', [PrevisionController::class, 'getData'])->name('prevision.getdata');
Route::post('prevision/postdata',  [PrevisionController::class, 'postData'])->name('prevision.postdata');
Route::get('prevision/fetchdata', [PrevisionController::class, 'fetchData'])->name('prevision.fetchdata');

