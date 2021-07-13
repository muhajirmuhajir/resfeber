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
        $tempatWisata = TempatWisata::paginate(5);
        return view('pages.wisata', compact('provinces', 'tempatWisata'));
    }

    public function show($slug)
    {
        $wisata = TempatWisata::where('slug', $slug)->first();
        if(!$wisata){
            return abort('404');
        }
        return view('pages.detail-wisata', compact('wisata'));
    }
}
