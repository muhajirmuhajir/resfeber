<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Paket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionTraveler;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        // id = id transaksi
        $transaction = Transaction::with(['travelers', 'paket', 'tempatWisata'])->findOrFail($id);

        return view('pages.checkout', compact('transaction'));
    }

    public function process(Request $request, $id)
    {
        // id = id paket
        $paket = Paket::with(['tempatWisata'])->findOrFail($id);

        // buat transaksi
        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'paket_id' => $paket->id,
            'tempat_wisata_id' => $paket->tempatWisata->id,
            'payment_id' => 0,
            'transaction_date' => Carbon::now(),
            'booking_date' => Carbon::now(),
            'transaction_status' => 'IN_CART',
            'price_total' => $paket->price

        ]);

        // tambahkan orang kedalam transaction travel
        TransactionTraveler::create([
            'transaction_id' => $transaction->id,
            'name' => Auth::user()->name,
            'phone_number' => "234567",
            'age' => 20
        ]);

        // return ke index
        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id)
    {
        // validasi request
        $fields = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'age' => 'required|numeric'
        ]);

        // assert transaction has same user id with current user
        $transaction = Transaction::with('paket')->findOrFail($id);

        if (Auth::user()->id != $transaction->user_id) {
            return abort('403');
        }

        // create new transaction traveler
        TransactionTraveler::create([
            'transaction_id' => $transaction->id,
            'name' => $fields['name'],
            'phone_number' => $fields['phone_number'],
            'age' => $fields['age']
        ]);

        // update price
        $transaction->price_total += $transaction->paket->price;
        $transaction->save();

        // return to index
        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $id)
    {
        $traveler = TransactionTraveler::with('transaction')->findOrFail($id);

        // assert transaction has same user id with current user
        $transaction = Transaction::with('paket')->findOrFail($traveler->transaction->id);

        if (Auth::user()->id != $transaction->user_id) {
            return abort('403');
        }

        // update price
        $transaction->price_total -= $transaction->paket->price;
        $transaction->save();

        $traveler->delete();

         // return to index
         return redirect()->route('checkout', $transaction->id);

    }
}
