<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\MahasiswaController;


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


Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/kaprodi');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/kaprodi', [KaprodiController::class, 'index']);
    Route::get('/kaprodi', [KaprodiController::class, 'index'])->name('kaprodi');
    Route::get('/kaprodi/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/kaprodi/dosen_wali', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/kaprodi/kaprodi', [KaprodiController::class, 'kaprodi'])->middleware('userAkses:kaprodi');
    Route::get('/kaprodi/dosen_wali', [KaprodiController::class, 'dosen_wali'])->middleware('userAkses:dosen_wali');
    Route::get('/kaprodi/mahasiswa', [KaprodiController::class, 'mahasiswa'])->middleware('userAkses:mahasiswa');
    Route::get('/logout', [SesiController::class, 'logout']);
});


// cara cepat untuk resource controller (index, create, store, show, edit, update, dan destroy)
Route::resource('dosen', DosenController::class);
Route::resource('kelas', KelasController::class);
Route::resource('request', RequestController::class);
Route::resource('mahasiswa', MahasiswaController::class);



Route::get('/request/create/{id}', [RequestController::class, 'create'])->name('request.create');


Route::post('/request/store/{id}', [RequestController::class, 'store'])->name('request.store');
Route::post('/request/store/{mahasiswa}', [RequestController::class, 'store'])->name('request.store');


Route::middleware(['auth'])->group(function () {
    Route::get('/requests', [RequestController::class, 'index'])->name('requests.index');
    Route::get('/request', [RequestController::class, 'index'])->name('request.index');
    Route::post('/request/approve/{id}', [RequestController::class, 'approve'])->name('request.approve');
    Route::post('request/reject/{id}', [RequestController::class, 'reject'])->name('request.reject');

});

Route::get('/dosen/mahasiswa/{nim}/edit', [DosenController::class, 'editMahasiswa'])->name('dosen.mahasiswa.edit');
Route::put('/dosen/mahasiswa/{nim}', [DosenController::class, 'updateMahasiswa'])->name('dosen.mahasiswa.update');
Route::delete('/dosen/mahasiswa/{nim}', [DosenController::class, 'destroyMahasiswa'])->name('mahasiswa.destroy');
Route::delete('mahasiswa/{nim}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');




















