<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\TempatWisata;
use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return view('pages.wisata', compact('provinces'));
    }

    public function show($slug)
    {
        $wisata = TempatWisata::where('slug', $slug)->first();
        return view('pages.detail-wisata', compact('wisata'));
    }
}
