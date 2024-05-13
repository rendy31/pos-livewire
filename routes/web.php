<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\KasirController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KategoriMenuController;

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

Auth::routes(['register'=>false]);

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::prefix('admin/')->middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::resource('menu', MenuController::class);

    Route::resource('kategori-menu', KategoriMenuController::class);

    // Route::get('pendapatan',[PendapatanController::class, 'index'])->name('pendapatan.index');

    Route::resource('kasir', KasirController::class);

});