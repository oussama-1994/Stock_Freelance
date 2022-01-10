<?php

use App\Http\Controllers\StockPFVR_Controller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FabricationController;
use \App\Http\Controllers\PrevisionController;
use \App\Http\Controllers\StockPFSF_Controller;



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

Route::get('fabrication_pf', [FabricationController::class,'index'])->name('ajaxdata');
Route::get('fabrication/getdata', [FabricationController::class, 'getData'])->name('ajaxdata.getdata');
Route::post('fabrication/postdata',  [FabricationController::class, 'postData'])->name('ajaxdata.postdata');
Route::get('fabrication/fetchdata', [FabricationController::class, 'fetchData'])->name('ajaxdata.fetchdata');


Route::get('prevision', [PrevisionController::class,'index'])->name('prevision');
Route::get('prevision/getdata', [PrevisionController::class, 'getData'])->name('prevision.getdata');
Route::post('prevision/postdata',  [PrevisionController::class, 'postData'])->name('prevision.postdata');
Route::get('prevision/fetchdata', [PrevisionController::class, 'fetchData'])->name('prevision.fetchdata');


Route::get('stock_pfsf', [StockPFSF_Controller::class,'index'])->name('stock_pfsf');
Route::get('stock_pfsf/getdata', [StockPFSF_Controller::class, 'getData'])->name('stock_pfsf.getdata');
Route::post('stock_pfsf/postdata',  [StockPFSF_Controller::class, 'postData'])->name('stock_pfsf.postdata');
Route::get('stock_pfsf/fetchdata', [StockPFSF_Controller::class, 'fetchData'])->name('stock_pfsf.fetchdata');


Route::get('stock_pfvr', [StockPFVR_Controller::class,'index'])->name('stock_pfvr');
Route::get('stock_pfvr/getdata', [StockPFVR_Controller::class, 'getData'])->name('stock_pfvr.getdata');
Route::post('stock_pfvr/postdata',  [StockPFVR_Controller::class, 'postData'])->name('stock_pfvr.postdata');
Route::get('stock_pfvr/fetchdata', [StockPFVR_Controller::class, 'fetchData'])->name('stock_pfvr.fetchdata');
