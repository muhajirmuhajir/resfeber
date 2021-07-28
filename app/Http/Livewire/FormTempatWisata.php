<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Facility;
use App\Models\MediaTempatWisata;
use App\Models\Produk;
use App\Models\Province;
use Livewire\Component;
use App\Models\TempatWisata;
use App\Models\Ticket;
use Livewire\WithFileUploads;

class FormTempatWisata extends Component
{
    use WithFileUploads;

    // wisata
    public TempatWisata $tempatWisata;

    public $status;
    public $updated_at;

    // tiket
    public $tickets;
    public $ticket_name;
    public $price;

    // media
    public $photo;

    // produk
    public $produk_name;
    public $produk_description;

    // facilities
    public $facility_name;

    public $cities = null;
    public $provinces = null;

    public $selectedProvince;
    public $selectedCity;

    public function mount($wisata)
    {
        $this->tempatWisata = $wisata;
        $this->status = $wisata->status;
        $this->updated_at = $wisata->updated_at;
        $this->provinces = Province::all();
        $this->cities = collect();

        if ($this->tempatWisata->city) {
            $city = City::with('province')->find($this->tempatWisata->city->id);
            $this->selectedProvince = $city->province->id;
            $this->selectedCity = $city->id;
            $this->cities = City::where('province_id', $city->province->id)->get();
        }
    }

    public function updatedSelectedProvince($province)
    {
        $this->cities = City::where('province_id', $province)->get();
    }
    public function render()
    {
        $wisata = TempatWisata::with('city')->findOrFail($this->tempatWisata->id);

        return view('livewire.form-tempat-wisata', compact('wisata'));
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:2048'
        ]);
    }

    public function savePhoto()
    {
        if ($this->photo) {
            $path = $this->photo->store('thumbnails', 'public');

            MediaTempatWisata::create([
                'tempat_wisata_id' => $this->tempatWisata->id,
                'media_url' => $path
            ]);

            $this->photo = null;
        }
    }

    public function saveStatus()
    {
        $this->tempatWisata->update(['status' => $this->status]);
        $this->emit('savedStatus');
    }

    public function addTiket()
    {
        Ticket::create([
            'tempat_wisata_id' => $this->tempatWisata->id,
            'name' => $this->ticket_name,
            'price' => $this->price,
        ]);
        $this->ticket_name = "";
        $this->price = 0;
    }

    public function deleteTiket(Ticket $id)
    {
        $id->delete();
    }

    public function addProduk()
    {
        Produk::create([
            'tempat_wisata_id' => $this->tempatWisata->id,
            'name' => $this->produk_name,
            'description' => $this->produk_description
        ]);

        $this->produk_name = "";
        $this->produk_description = "";
    }

    public function deleteProduk(Produk $id)
    {
        $id->delete();
    }

    public function addFacility()
    {
        Facility::create([
            'tempat_wisata_id' => $this->tempatWisata->id,
            'name' => $this->facility_name,
        ]);

        $this->facility_name = "";
    }

    public function deleteFacility(Facility $id)
    {
        $id->delete();
    }

    public function deleteMedia(MediaTempatWisata $id)
    {
        $id->delete();
    }
}
