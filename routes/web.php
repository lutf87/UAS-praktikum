<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
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
    Route::resource('dosen', DosenController::class);

    // profile dosen
    Route::get('profile/{id}', [DosenController::class, 'profile'])->name('dosen.profile');

    // data_pengampu
    Route::resource('ampu', MatkulController::class);
});
