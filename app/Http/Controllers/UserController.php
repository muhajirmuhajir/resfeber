<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $success_count = collect();
        $pending_count = collect();
        $transa = Transaction::where('user_id', Auth::user()->id)->get()->each(function ($transaction) use ($success_count, $pending_count) {
            if ($transaction->transaction_status ===  'SUCCESS') {
                $success_count->push($transaction);
            } else {
                $pending_count->push($transaction);
            }
        });
        $success_count =  $success_count->count();
        $pending_count = $pending_count->count();

        return view('pages.profile', compact('success_count', 'pending_count'));
    }

    public function informationComplete()
    {
        return view('pages.information-complete');
    }

    public function informationStore(Request $request)
    {
        $fields = $request->validate([
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->update($fields);

        return redirect()->route('home');
    }
}
