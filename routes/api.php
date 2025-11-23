<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\pasienController;
use App\Http\Controllers\API\antrianController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('pasien', [pasienController::class, 'getall']);
Route::get('pasien/{id}', [pasienController::class, 'getdetail']);
Route::post('pasien', [pasienController::class, 'adddata']);
Route::post('login-pasien', [pasienController::class, 'loginpasien']);
Route::get('dokter', [antrianController::class, 'getdokter']);
Route::get('dokter-by-jadwal', [antrianController::class, 'getdokterjadwal']);
Route::get('jam-praktek-by-jadwal', [antrianController::class, 'getjampraktek']);
Route::post('add-kunjungan', [antrianController::class, 'addkunjungan']);
Route::get('poli', [antrianController::class, 'getpoli']);
Route::get('penjab', [antrianController::class, 'getpenjab']);
Route::get('jadwal', [antrianController::class, 'jadwal']);
Route::get('get-kunjungan/{norm}', [antrianController::class, 'getkunjungan']);
Route::get('detail-kunjungan/{kode}', [antrianController::class, 'detailkunjungan']);
