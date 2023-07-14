<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Berjalan_Controller;
use App\Http\Controllers\Admin\BerjalanController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\Riwayat_Controller;
use App\Http\Controllers\Admin\RiwayatController;
use App\Http\Controllers\Admin\Selesai_Controller;
use App\Http\Controllers\Admin\SelesaiController;
use App\Http\Controllers\Admin\Usulan_baruController;
use App\Http\Controllers\Admin\UsulanbaruController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function() {
        
        Route::get('/', [AdminController::class, 'dashboard']);
        Route::resource('admin', AdminController::class);
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('usulanbaru', UsulanbaruController::class);
        Route::resource('berjalan', BerjalanController::class);
        Route::resource('selesai', SelesaiController::class);
        Route::resource('riwayat', RiwayatController::class);

        Route::get('lanjutan/{penelitian_usulanbaru}', [UsulanBaruController::class, 'lanjutan']);

        Route::resource('usulan_baru', Usulan_baruController::class);
        Route::resource('berjalan_', Berjalan_Controller::class);
        Route::resource('selesai_', Selesai_Controller::class);
        Route::resource('riwayat_', Riwayat_Controller::class);
});

});

