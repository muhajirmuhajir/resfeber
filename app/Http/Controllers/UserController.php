<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

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

    public function update(Request $request)
    {
        $fields = $request->validate([
            'name' => 'string',
            'address' => 'string',
            'phone_number' => 'string',
            'image_url' => 'image|max:2048'
        ]);

        if ($request->file('image_url')) {
            $path = $request->image_url->store('profile', 'public');
            $fields['image_url'] = $path;
        }

        User::find(Auth::user()->id)->update($fields);
        return redirect()->route('profile')->with('status', 'Profile berhasil di update');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' =>['required'],
            'password' =>['required', 'confirmed', Password::defaults()],
        ]);

        if(!Hash::check($request->current_password, Auth::user()->password)){
            return redirect()->route('profile')->with('password', 'Password Tidak Valid');
        }

        User::find(Auth::user()->id)->update(['password' => Hash::make($request->password)]);


        return redirect()->route('profile')->with('status', 'Password Berhasil Diperbarui');
    }
}
