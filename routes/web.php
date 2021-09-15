<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Atlet\AtletController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'atlet'], function () {
    Route::get('/', [AtletController::class, 'index'])->name('atlet.index');
    Route::get('/add', [AtletController::class, 'create'])->name('atlet.add');
    Route::post('/store', [AtletController::class, 'store'])->name('atlet.store');
    Route::get('/export', [AtletController::class, 'export'])->name('atlet.export');
    Route::get('/export_atlet/{id}', [AtletController::class, 'export_atlet'])->name('atlet.export_atlet');
    Route::get('/download', [AtletController::class, 'download'])->name('atlet.download');
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
Auth::routes();

