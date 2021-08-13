<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TempatWisata;

class TempatWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = TempatWisata::paginate(7);

        return view('pages.admin.tempat-wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.tempat-wisata.update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required'
        ]);
        $fields['slug'] = Str::slug($fields['name']);

        TempatWisata::create($fields);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = TempatWisata::with('location')->findOrFail($id);

        return view('pages.admin.tempat-wisata.update', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = TempatWisata::findOrFail($id);

        return view('pages.admin.tempat-wisata.update', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required',
            'history' => 'required',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
            'contact' => 'required',
            'city_id' => 'required',
        ]);

        $wisata = TempatWisata::with('location')->findOrFail($id);
        if ($wisata->location) {
            $wisata->location()->update([
                'name' => $request->address,
                'address' => $request->address,
                'city' => $request->city_id,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);
        } else {
            $wisata->location()->create([
                'name' => $request->address,
                'address' => $request->address,
                'city' => $request->city_id,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);
        }

        $wisata->update($fields);

        return back()->withSuccess('Data Berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TempatWisata::destroy($id);

        return back();
    }
}
