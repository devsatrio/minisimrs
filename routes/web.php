<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\kunjunganController;
use App\Http\Controllers\billingController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/pasien',pasienController::class);
Route::get('/kunjungan/{id}/input-rm',[kunjunganController::class,'inputRm']);
Route::post('/kunjungan/simpan-odontogram',[kunjunganController::class,'simpanOdontogram']);
Route::post('/kunjungan/simpan-diagnosa',[kunjunganController::class,'simpanDiagnosa']);
Route::post('/kunjungan/simpan-pemeriksaan-fisik',[kunjunganController::class,'simpanPemeriksaanFisik']);
Route::get('/kunjungan/get-odontogram/{no_kunjungan}/{no_rm}',[kunjunganController::class,'getOdontogram']);
Route::get('/kunjungan/get-diagnosa/{no_kunjungan}/{no_rm}',[kunjunganController::class,'getDiagnosa']);
Route::get('/kunjungan/get-resume-medis/{no_kunjungan}/{no_rm}',[kunjunganController::class,'getResumeMedis']);
Route::get('/kunjungan/get-pemeriksaan-fisik/{no_kunjungan}/{no_rm}',[kunjunganController::class,'getPemeriksaanFisik']);
Route::resource('/kunjungan',kunjunganController::class);
Route::resource('/billing',billingController::class);