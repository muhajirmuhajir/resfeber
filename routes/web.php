<?php

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\TempatWisataController;
use App\Http\Controllers\Admin\DashboardController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('wisata', [TempatWisataController::class, 'index'])->name('wisata');
Route::get('wisata/{slug}', [TempatWisataController::class, 'show'])->name('detailwisata');
Route::post('wisata/{wisata}', [TempatWisataController::class, 'postComment'])->name('detailwisata.postcomment');
Route::delete('wisata/{comment}', [TempatWisataController::class, 'deleteComment'])->name('detailwisata.deletecomment');

Route::get('travel', [TravelController::class, 'index'])->name('travel');
Route::get('travel/{id}', [TravelController::class, 'show'])->name('detailTravel');


Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::middleware(['auth', 'information_complete'])->group(function () {
    Route::get('profile', [UserController::class, 'index'])->name('profile');

    Route::get('transaksi', function () {
        $transaksi = Transaction::with('tempatWisata')->where('user_id', auth()->user()->id)->paginate(5);
        return view('pages.transaksi', compact('transaksi'));
    })->name('transaksi');

    Route::get('transaksi/{id}', function ($id) {
        $transaksi = Transaction::with(['tempatWisata', 'paket', 'travelers'])->findOrFail($id);
        return view('pages.detail-transaksi', compact('transaksi'));
    })->name('detailTransaksi');

    Route::get('checkout/{id}', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('checkout/{id}', [CheckoutController::class, 'process'])->name('checkout_process');
    Route::post('checkout/create/{id}', [CheckoutController::class, 'create'])->name('checkout_create');
    Route::post('checkout/remove/{id}', [CheckoutController::class, 'remove'])->name('checkout_remove');
    Route::post('checkout/confirm/{transaction}', [CheckoutController::class, 'checkout'])->name('checkout_pay');

});

Route::group(['prefix' => 'midtrans'], function (){
    Route::post('callback', [MidtransController::class, 'notificationHandler']);
    Route::get('finish', [MidtransController::class, 'finishRedirect']);
    Route::get('unfinish', [MidtransController::class, 'unfinishRedirect']);
    Route::get('error', [MidtransController::class, 'errorRedirect']);
});

Route::get('information-complete', [UserController::class, 'informationComplete'])->name('information-complete')->middleware('auth');
Route::post('information-complete', [UserController::class, 'informationStore'])->name('information-store')->middleware('auth');

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('tempat-wisata', App\Http\Controllers\Admin\TempatWisataController::class);

    Route::resource('paket-wisata', App\Http\Controllers\Admin\PaketWisataController::class);

    Route::resource('transaction', App\Http\Controllers\Admin\TransactionController::class);

    Route::resource('travel', App\Http\Controllers\Admin\TravelController::class);
});

require __DIR__ . '/auth.php';
