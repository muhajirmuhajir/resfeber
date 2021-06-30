<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        return view('pages.paket');
    }

    public function show($slug)
    {
        return view('pages.detail-paket');
    }
}
