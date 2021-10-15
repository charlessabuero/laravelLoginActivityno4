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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('/accountant', [App\Http\Controllers\AccountantController::class, 'index'])->name('accountant');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/secretary', [App\Http\Controllers\SecretaryController::class, 'index'])->name('secretary');
Route::get('/cashier', [App\Http\Controllers\CashierController::class, 'index'])->name('cashier');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
