<?php

namespace App\Http\Controllers;

use App\Models\TempatWisata;
use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    public function index()
    {
        return view('pages.wisata');
    }

    public function show($slug)
    {
        $wisata = TempatWisata::where('slug', $slug)->first();
        return view('pages.detail-wisata', compact('wisata'));
    }
}
