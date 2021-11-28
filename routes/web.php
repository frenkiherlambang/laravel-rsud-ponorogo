<?php

use App\Http\Controllers\JadwalDokterController;
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

Route::get('/jadwaldokter', [JadwalDokterController::class, 'halamanJadwal']);

Route::get('/tambah-jadwal', [JadwalDokterController::class, 'createJadwal']);
Route::post('/tambah-jadwal', [JadwalDokterController::class, 'insertJadwalToDB']);

Route::get('/editjadwal/{id}', [JadwalDokterController::class, 'editJadwal']);
Route::post('/editjadwal/{id}', [JadwalDokterController::class, 'updateJadwalToDB']);

Route::get('/deletejadwal/{id}', [JadwalDokterController::class, 'deleteJadwal']);
