<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\TempatWisata;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TempatWisataController extends Controller
{
    public function index()
    {

        return view('pages.wisata');
    }

    public function show($slug)
    {
        $wisata = TempatWisata::with([ 'ulasan' => function ($ulasan) {
            $ulasan->with('user');
            $ulasan->latest();
        }, 'facilities', 'pakets', 'tickets'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail-wisata', compact('wisata'));
    }

    public function postComment(Request $request, TempatWisata $wisata)
    {
        $fields = $request->validate([
            'comment' => 'required',
            'star_count' => 'required'
        ]);

        $wisata->ulasan()->create($fields + ['user_id' => Auth::user()->id]);

        return back();
    }

    public function deleteComment(Ulasan $comment)
    {
        if(Auth::user()->id != $comment->user_id){
            abort(403);
        }
        $comment->delete();
        return back();
    }
}
