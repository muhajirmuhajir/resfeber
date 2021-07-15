<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\TourTravel;
use App\Models\Transaction;
use App\Models\TempatWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index () {
        $user_count = User::where('role', '!=', 3)->count();
        $tempat_wisata_count = TempatWisata::count();
        $travel_count = TourTravel::count();
        $transaction_count = Transaction::count();
        return view('pages.admin.dashboard', compact('user_count', 'tempat_wisata_count', 'travel_count', 'transaction_count'));
    }
}
