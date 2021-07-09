<?php

use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TempatWisataController;

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

Route::get('wisata', [TempatWisataController::class, 'index'])->name('wisata');
Route::get('wisata/{slug}', [TempatWisataController::class, 'show'])->name('detailwisata');

Route::get('paket', [PaketController::class, 'index'])->name('paket');
Route::get('paket/{slug}', [paketController::class, 'show'])->name('detailpaket');


Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('profile', function () {
        return view('pages.profile');
    })->name('profile');

    Route::get('transaksi', function () {
        $transaksi = Transaction::where('user_id', auth()->user()->id)->paginate(5);
        return view('pages.transaksi', compact('transaksi'));
    })->name('transaksi');

    Route::get('information-complete', function () {
        return view('pages.information-complete');
    })->name('information-complete');

    Route::get('checkout', function () {
        return view('pages.checkout');
    })->name('checkout');
});


Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');

    Route::resource('tempat-wisata', App\Http\Controllers\Admin\TempatWisataController::class);
        
    Route::resource('paket-wisata', App\Http\Controllers\Admin\PaketWisataController::class);

    Route::resource('transaction', App\Http\Controllers\Admin\TransactionController::class);
});

require __DIR__ . '/auth.php';
