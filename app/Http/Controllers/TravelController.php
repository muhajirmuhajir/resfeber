<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\TourTravel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {

        $travels = TourTravel::with(['pakets'=> function($query){
            $query->orderBy('price')->take(1);
        }])->get();
        return view('pages.travel', compact('travels'));
    }

    public function show($id)
    {
        $travel = TourTravel::with(['pakets'])->findOrFail($id);
        return view('pages.detail-travel', compact('travel'));
    }
}
