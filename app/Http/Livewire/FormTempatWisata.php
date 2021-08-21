<?php

namespace App\Http\Livewire;

use App\Models\AdditionalNeed;
use App\Models\City;
use App\Models\Produk;
use App\Models\Ticket;
use Livewire\Component;
use App\Models\Facility;
use App\Models\Province;
use App\Models\TempatWisata;
use Livewire\WithFileUploads;
use App\Models\MediaTempatWisata;
use App\Models\ParkingPrice;
use Illuminate\Support\Facades\DB;

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
    public $produk_image;

    // facilities
    public $facility_name;

    // ParkingPrice
    public $parking_jenis;
    public $parking_price;

    // AdditionalNeeds
    public $additionalNeed_name;
    public $additionalNeed_description;

    public $cities = null;
    public $provinces = null;

    public $selectedProvince;
    public $selectedCity;

    public $videoURL;

    public function mount($wisata)
    {
        $this->tempatWisata = $wisata;
        if( $wisata->video){
            $this->videoURL = $wisata->video->media_url;
        }
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
        $wisata = TempatWisata::with(['city', 'media' => function ($query){
            $query->orderBy('position');
        }])->findOrFail($this->tempatWisata->id);

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
            $position = MediaTempatWisata::max('position') + 1;
            MediaTempatWisata::create([
                'tempat_wisata_id' => $this->tempatWisata->id,
                'media_url' => $path,
                'position' => $position,
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
        // validasi foto
        if ($this->produk_image) {
            $path = $this->produk_image->store('thumbnails', 'public');
            Produk::create([
                'tempat_wisata_id' => $this->tempatWisata->id,
                'name' => $this->produk_name,
                'description' => "-",
                'image_url' => $path
            ]);
            $this->produk_image = null;
            $this->produk_name = "";
            $this->produk_description = "";
        }

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
        MediaTempatWisata::where('position', '>', $id->position)->update([
            'position' => DB::raw('position - 1')
        ]);
        $id->delete();
    }

    public function updateMediaOrder($media)
    {
        foreach ($media as $item) {
            MediaTempatWisata::find($item['value'])->update(['position' => $item['order']]);
        }
    }

    public function addParkingPrice()
    {
        ParkingPrice::create([
            'tempat_wisata_id' => $this->tempatWisata->id,
            'jenis' => $this->parking_jenis,
            'price' => $this->parking_price
        ]);

        $this->parking_jenis = "";
        $this->parking_price = "";
    }

    public function deleteParkingPrice(ParkingPrice $id)
    {
        $id->delete();
    }

    public function addAdditionalNeed()
    {
        AdditionalNeed::create([
            'tempat_wisata_id' => $this->tempatWisata->id,
            'name' => $this->additionalNeed_name,
            'description' => $this->additionalNeed_description,
        ]);

        $this->additionalNeed_name = "";
        $this->additionalNeed_description = "";
    }

    public function deleteAdditionalNeed(AdditionalNeed $id)
    {
        $id->delete();
    }

    public function saveVideoEmbed()
    {
        $media = MediaTempatWisata::where('tempat_wisata_id', $this->tempatWisata->id)->where('type', 'video')->first();
        if($media){
            $media->update(['media_url' => $this->videoURL]);
        }
        else{
            MediaTempatWisata::create([
                'tempat_wisata_id' => $this->tempatWisata->id,
                'type' => 'video',
                'media_url' => $this->videoURL
            ]);
        }
        $this->emit('savedVideo');
    }
}
