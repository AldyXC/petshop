<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ProductController;
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

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Dashboard Admin
Route::get('/dashboard', [DashboardAdminController::class, 'index']);

// Product Dashboard Admin
Route::get('/dashboard/product', [ProductController::class, 'index']);
Route::get('/dashboard/product/create', [ProductController::class, 'create']);
