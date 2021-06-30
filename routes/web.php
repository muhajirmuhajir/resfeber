<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\TempatWisataController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('wisata',[TempatWisataController::class, 'index'])->name('wisata');
Route::get('wisata/{slug}', [TempatWisataController::class, 'show'])->name('detailwisata');

Route::get('paket', [PaketController::class, 'index'])->name('paket');
Route::get('paket/{slug}', [paketController::class, 'show'])->name('detailpaket');

require __DIR__.'/auth.php';
