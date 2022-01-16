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
Route::get('statistic', [HomeController::class, 'statistic'])->name('statistic');
Route::get('live_statistic', [HomeController::class, 'live_statistic'])->name('live_statistic');

Route::group(['prefix' => 'atlet', 'middleware' => ['web']], function () {
    Route::get('/', [AtletController::class, 'index'])->name('atlet.index');
    Route::get('/add', [AtletController::class, 'create'])->name('atlet.add');
    Route::get('/form/add', [AtletController::class, 'formCreate'])->name('atlet.form_add');
    Route::post('/store', [AtletController::class, 'store'])->name('atlet.store');
    Route::post('/form/store', [AtletController::class, 'simpan'])->name('atlet.form_store');
    Route::post('/form/sevent/store', [AtletController::class, 'store_sevent'])->name('atlet.store_sevent');
    Route::post('/form/mevent/store', [AtletController::class, 'store_mevent'])->name('atlet.store_mevent');
    Route::get('/export', [AtletController::class, 'export'])->name('atlet.export');
    Route::get('/export_atlet/{id}', [AtletController::class, 'export_atlet'])->name('atlet.export_atlet');
    Route::get('/download', [AtletController::class, 'download'])->name('atlet.download');
    Route::post('/upload', [AtletController::class, 'uploadgambar'])->name('atlet.upload');
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
Auth::routes();

