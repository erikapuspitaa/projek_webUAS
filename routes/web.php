<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\Admin;
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

Route::get('/cek-role', function(){
    if (auth()->user()->hasRole(['admin', 'pasien', 'dokter'])){
        return redirect('admin/dashboard_admin');
    }else{
        return redirect('/');

    }
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard_admin', function () {
    return view('admin/dashboard_admin');
})->middleware(['auth', 'role:admin']);

Route::get('/dashboard_dokter', function () {
    return view('admin/dashboard_dokter');
})->middleware(['auth', 'role:admin|dokter']);

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'], 'role:admin|pasien')->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/data_pasien/{id}/konfirmasi',[PasienController::class, 'konfirmasi']);
    Route::get('/data_dokter/{id}/konfirmasi',[DokterController::class, 'konfirmasi']);
    Route::get('/data_admin/{id}/konfirmasi',[DokterController::class, 'konfirmasi']);
    Route::get('/data_pasien/{id}/delete',[PasienController::class, 'delete']);
    Route::get('/data_dokter/{id}/delete',[DokterController::class, 'delete']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('/data_pasien',PasienController::class);
    Route::resource('/data_dokter',DokterController::class);
    Route::resource('/data_admin',AdminController::class);
    
});





Route::get('user-page', function() {
    return 'Halaman untuk User';
})->middleware('role:user')->name('user.page');

Route::resource('/profile_user',ProfileUserController::class);

Route::prefix('admin')->group(function(){
    Route::get('/', [Admin\Auth\LoginController::class,'loginForm']);
    Route::get('/login', [Admin\Auth\LoginController::class,'loginForm']);
    Route::get('/home', [Admin\HomeController::class,'index'])->name('admin.home');
});

require __DIR__.'/auth.php';
