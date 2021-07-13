<?php

namespace App\Http\Controllers;

use App\Models\TourTravel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function index()
    {
        $travels = TourTravel::all();
        return view('pages.travel', compact('travels'));
    }

    public function show($id)
    {
        $travel = TourTravel::findOrFail($id);
        return view('pages.detail-travel', compact('travel'));
    }
}
