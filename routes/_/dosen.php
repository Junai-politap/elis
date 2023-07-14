<?php

use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\ProfilController;
use App\Http\Controllers\Dosen\UsulanbaruController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth:dosen'], function () {
    Route::prefix('dosen')->group(function () {
        Route::get('/', [DosenController::class, 'index']);
        Route::resource('usulanbaru', UsulanbaruController::class);


        Route::get('profil', [ProfilController::class, 'index']);
        Route::get('profil/{pegawai}/edit', [ProfilController::class, 'edit']);
        Route::put('profil/{pegawai}', [ProfilController::class, 'update']);

        Route::get('dosen/lanjutan', [UsulanbaruController::class, 'lanjutan']);
    });
});
