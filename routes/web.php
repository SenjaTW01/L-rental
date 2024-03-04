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

Route::get('/', function () {
    return view('layouts.HomePage');
});

Route::get('/selection', [HomeController::class, 'selection'])->name('selection');
Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('Pemabayaran');
Route::get('/deskripsi', [HomeController::class, 'deskripsi'])->name('Deskripsi');
