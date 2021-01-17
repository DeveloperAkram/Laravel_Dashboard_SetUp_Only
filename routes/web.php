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

Route::get('/',[\App\Http\Controllers\DashboardController::class,'index']);
Route::get('/test', function () {
    return view('clonedashboard');
});
Route::get('/form', function () {
    return view('form');
});

// user link up
Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('user.index');

// create
Route::get('/users/create',[\App\Http\Controllers\UserController::class,'create'])->name('user.create');

// store
Route::post('/users/store',[\App\Http\Controllers\UserController::class,'store'])->name('user.store');

// show
Route::get('/users/{id}',[\App\Http\Controllers\UserController::class,'show'])->name('user.show');

// edit
Route::get('/users/edit/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('user.edit');

// update
Route::post('/users/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');

// delete
Route::get('/users/delete/{id}',[\App\Http\Controllers\UserController::class,'delete'])->name('user.delete');
