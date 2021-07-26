<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $wisataPopuler = TempatWisata::withCount(['transactions' => function ($query){
            $query->where('transaction_status', 'SUCCESS');
        }])->orderBy('transactions_count', 'desc')->limit(3)->get();


        return view('index', compact('wisataPopuler'));
    }
}
