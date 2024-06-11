<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\KompensasiController;

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
    return view('welcome');
});
Route::get('/totals', [TotalController::class, 'index']);
Route::get('/totals/tambah', [TotalController::class, 'create']);
Route::post('/totals/store', [TotalController::class, 'store']);
Route::get('/totals/edit/{id}', [TotalController::class, 'edit']);
Route::put('/totals/update/{id}', [TotalController::class, 'update']);
Route::get('/totals/hapus/{id}', [TotalController::class, 'delete']);
Route::get('/totals/destroy/{id}', [TotalController::class, 'destroy']);
Route::get('/kompensasi', [KompensasiController::class, 'index']);
Route::get('/kompensasi/tambah', [KompensasiController::class, 'create']);
Route::post('/kompensasi/store', [KompensasiController::class, 'store']);
Route::get('/kompensasi/edit/{id}', [KompensasiController::class, 'edit']);
Route::put('/kompensasi/update/{id}', [KompensasiController::class, 'update']);
Route::get('/kompensasi/hapus/{id}', [KompensasiController::class, 'delete']);
Route::get('/kompensasi/destroy/{id}', [KompensasiController::class, 'destroy']);
Route::get('/kompensasi/cetak', [KompensasiController::class, 'cetak']);


