<?php

use App\Models\Kecamatan;
use App\Models\Distribusi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BinaanController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\PermissionController;

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
    return view('frontsite.index');
});

// Redirect to Success Register Page
Route::resource('success', SuccessController::class);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {



    // dashboard
    Route::resource('dashboard', DashboardController::class);

    Route::resource('instansi', InstansiController::class);

    Route::resource('donatur', DonaturController::class);

    Route::resource('kecamatan', KecamatanController::class);

    Route::get('/desa/getdesa/{desa:kecamatan_id}', [DesaController::class, 'getdesa'])->name('desa.getdesa');

    Route::resource('desa', DesaController::class);

    Route::resource('binaan', BinaanController::class);

    Route::resource('typeuser', TypeUserController::class);

    // distribusi
    Route::resource('distribusi', DistribusiController::class);

    // user
    Route::resource('user', UserController::class);

    // role
    Route::resource('role', RoleController::class);

    // permission
    Route::resource('permission', PermissionController::class);
});
