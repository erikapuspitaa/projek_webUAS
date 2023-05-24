<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/post', function () {
    return view('admin/post');
});

Auth::routes();

Route::get('/data_pasien/{id}/konfirmasi',[PasienController::class, 'konfirmasi']);
Route::get('/data_pasien/{id}/delete',[PasienController::class, 'delete']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/data_pasien',PasienController::class);

