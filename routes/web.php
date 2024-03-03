<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'Home'])->name('Home');

Route::get('/selection', [HomeController::class, 'selection'])->name('selection');
Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('Pemabayaran');
Route::get('/beli', [HomeController::class, 'beli'])->name('Beli');
Route::get('/card', [HomeController::class, 'card'])->name('Card');
Route::get('/Login', [HomeController::class, 'login'])->name('login');
Route::get('/SignUp', [HomeController::class, 'signup'])->name('signup');