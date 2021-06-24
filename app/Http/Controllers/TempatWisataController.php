<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempatWisataController extends Controller
{
    public function index()
    {
        return view('pages.wisata');
    }

    public function show($slug)
    {
        return view('pages.detail-wisata');
    }
}
