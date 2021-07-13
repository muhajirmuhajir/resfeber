<?php

use App\Http\Controllers\CheckoutController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
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

Route::get('travel', [TravelController::class, 'index'])->name('travel');
Route::get('travel/{id}', [TravelController::class, 'show'])->name('detailTravel');


Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('profile', function () {
        return view('pages.profile');
    })->name('profile');

    Route::get('transaksi', function () {
        $transaksi = Transaction::with('tempatWisata')->where('user_id', auth()->user()->id)->paginate(5);
        return view('pages.transaksi', compact('transaksi'));
    })->name('transaksi');

    Route::get('transaksi/{id}', function ($id) {
        $transaksi = Transaction::with(['tempatWisata', 'paket', 'travelers'])->findOrFail($id);
        return view('pages.detail-transaksi', compact('transaksi'));
    })->name('detailTransaksi');

    Route::get('information-complete', function () {
        return view('pages.information-complete');
    })->name('information-complete');

    Route::get('checkout/{id}', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('checkout/{id}', [CheckoutController::class, 'process'])->name('checkout_process');
    Route::post('checkout/create/{id}', [CheckoutController::class, 'create'])->name('checkout_create');
    Route::post('checkout/remove/{id}', [CheckoutController::class, 'remove'])->name('checkout_remove');
});


Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard');

    Route::resource('tempat-wisata', App\Http\Controllers\Admin\TempatWisataController::class);

    Route::resource('paket-wisata', App\Http\Controllers\Admin\PaketWisataController::class);

    Route::resource('transaction', App\Http\Controllers\Admin\TransactionController::class);

    Route::resource('travel', App\Http\Controllers\Admin\TravelController::class);
});

require __DIR__ . '/auth.php';
