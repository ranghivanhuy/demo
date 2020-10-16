<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/home', [AdminController::class, 'home'])->name('home');

Route::get('login', [LoginController::class, 'getLogin'])->name('login-form');
Route::post('login', [LoginController::class, 'postLogin'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('admin', [AdminController::class, 'admin'])->name('admin')->middleware('admin');

Route::get('user', [AdminController::class, 'user'])->name('user');

Route::get('nopermission', [AdminController::class, 'nopermission']);