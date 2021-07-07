<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TempatWisata;
use App\Models\Ticket;

class FormTempatWisata extends Component
{

    // wisata
    public $wisata_id;
    public $name;
    public $history;
    public $jam_buka;
    public $jam_tutup;
    public $contact;
    public $status;
    public $updated_at;

    // tiket
    public $tickets;
    public $ticket_name;
    public $price;

    // media
    public $media;

    // produks
    public $produks;

    // facilities
    public $facilities;

    protected $rules = [
        'name' => 'required',
        'history' => 'nullable',
        'jam_buka' => 'nullable',
        'jam_tutup' => 'nullable',
        'contact' => 'nullable'
    ];


    public function mount($wisata)
    {
        $this->wisata_id = $wisata->id;
        $this->name = $wisata->name;
        $this->history = $wisata->history;
        $this->jam_buka = $wisata->jam_buka;
        $this->jam_tutup = $wisata->jam_tutup;
        $this->contact = $wisata->contact;
        $this->status = $wisata->status;
        $this->updated_at = $wisata->updated_at;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $wisata = TempatWisata::findOrFail($this->wisata_id);

        return view('livewire.form-tempat-wisata', compact('wisata'));
    }

    public function updateWisata()
    {
        $validateData = $this->validate();

        $wisata = TempatWisata::findOrFail($this->wisata_id);
        $wisata->update($validateData);
    }

    public function addTiket()
    {
        Ticket::create([
            'tempat_wisata_id' => $this->wisata_id,
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
}
