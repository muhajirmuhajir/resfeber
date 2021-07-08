<?php

namespace App\Http\Livewire;

use App\Models\Facility;
use App\Models\MediaTempatWisata;
use App\Models\Produk;
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



    public function mount($wisata)
    {
        $this->tempatWisata = $wisata;
        $this->status = $wisata->status;
        $this->updated_at = $wisata->updated_at;
    }


    public function render()
    {
        $wisata = TempatWisata::findOrFail($this->tempatWisata->id);

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
}
