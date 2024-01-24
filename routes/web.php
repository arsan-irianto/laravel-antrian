<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\HomeController;
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
/*
Route::get('/', function () {
    return view('dashboard');
});*/

Route::get('/', [AntrianController::class, 'index'])->name('dashboard');
Route::get('/current-antrian', [AntrianController::class, 'getCurrentAntrian'])->name('current-antrian');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home/antrian-done', [HomeController::class, 'antrianDone'])->name('home.antrian-done');
Route::get('/home/list-antrian', [HomeController::class, 'listAntrian'])->name('home.list-antrian');

