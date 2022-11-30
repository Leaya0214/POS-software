<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BranchController;
use App\Http\Controllers\backend\ProductController;
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
    return view('welcome');
});
Route::get('/', function () {
    return view('backend.dashboard');
})->name('dashboard');

// Route::get('/admin', function () {
//     return view('backend.dashboard');
// });

Route::group(['prefix'=>'/branch'],function(){
    Route::get('/add',[BranchController::class,'add'])->name('branchadd');
    Route::post('/store',[BranchController::class,'store'])->name('branchstore');
    Route::get('/show',[BranchController::class,'show'])->name('branchmanage');
    Route::get('/delete/{id}',[BranchController::class,'destroy'])->name('delete');
});

Route::group(['prefix'=>'/product'],function(){
    Route::get('/add',[ProductController::class,'add'])->name('productadd');
    Route::post('/store',[ProductController::class,'store']);
    //Route::get('/show',[BranchController::class,'show'])->name('branchmanage');
    //Route::get('/delete/{id}',[BranchController::class,'destroy'])->name('delete');
});



