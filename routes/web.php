<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ProfileUserController;
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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard_admin', function () {
    return view('admin/dashboard_admin');
})->middleware(['verified', 'role:admin']);


Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['verified'])->name('dashboard');

Route::middleware(['verified', 'role:admin'])->group(function () {
    Route::get('/data_pasien/{id}/konfirmasi',[PasienController::class, 'konfirmasi']);
    Route::get('/data_pasien/{id}/delete',[PasienController::class, 'delete']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('/data_pasien',PasienController::class);
    Route::resource('/data_dokter',DokterController::class);
    
    
});


Route::resource('/profile_user',ProfileUserController::class);

require __DIR__.'/auth.php';
