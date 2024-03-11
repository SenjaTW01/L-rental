<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
Route::get('/deskripsi', [HomeController::class, 'deskripsi'])->name('deskripsi');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::post('/signup/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('/card', [HomeController::class, 'card'])->name('card');
Route::get('/motor', [HomeController::class, 'motorcard'])->name('motorcard');
