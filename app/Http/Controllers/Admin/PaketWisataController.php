<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;


class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Paket::with(['tempatWisata', 'tourTravel'])->paginate(10);

        return view('pages.admin.paket-wisata.index', compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.admin.paket-wisata.update');
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
            'tempat_wisata_id' => 'required|exists:tempat_wisatas,id',
            'tour_travel_id'  => 'required|exists:tour_travel,id',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|image|max:2048'
        ]);

        if($request->file('thumbnail')){
            $thumbnail = $request->thumbnail->store('paket', 'public');
            $fields['thumbnail'] = $thumbnail;
        }


        Paket::create($fields);

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
        $paket = Paket::findOrFail($id);

        return view('pages.admin.paket-wisata.update', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket = Paket::findOrFail($id);

        return view('pages.admin.paket-wisata.update', compact(('paket')));
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
            'tempat_wisata_id' => 'required',
            'tour_travel_id'  => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'thumbnail' => 'required|image|max:2048'
        ]);

        $paket = Paket::findOrFail($id);

        if($request->file('thumbnail')){
            $thumbnail = $request->thumbnail->store('paket', 'public');
            $fields['thumbnail'] = $thumbnail;
        }

        $paket->update($fields);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::destroy($id);

        return back();
    }
}
