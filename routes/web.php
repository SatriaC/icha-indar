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


Auth::routes();

Route::get('/', [App\Http\Controllers\WishController::class, 'index'])->name('wish');
Route::post('/wish', [App\Http\Controllers\WishController::class, 'store'])->name('wish.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
