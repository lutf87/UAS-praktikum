<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('dosen')->group(function () {
    // daftar dosen
    Route::get('', function(
        $title = "Dosen | Data"
    ) {
        return view('dosen.dosen', compact('title'));
    })->name('v_dosen');

    // profile dosen
    Route::get('profil', function (
        $title = "Dosen | Profil"
    ) {
        return view('dosen.profile', compact('title'));
    })->name('v_profil');

    // data_pengampu
    Route::get('ampu', function(
        $title = "Data | Pengampu"
    ) {
        return view('matkul.ampu', compact('title'));
    })->name('v_ampu');
});
