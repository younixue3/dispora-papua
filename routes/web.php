<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Atlet\AtletController;

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

Route::get('/', [AtletController::class, 'index'])->name('home');
Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
Auth::routes();

