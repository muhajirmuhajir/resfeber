<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Province;
use App\Models\TempatWisata;
use Livewire\WithPagination;

class WisataFilter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $selectedProvinces;
    public $provinces;

    public function mount()
    {
        $this->selectedProvinces = [];
        $this->provinces = Province::all();
    }
    public function render()
    {
        if (sizeof($this->selectedProvinces) > 0) {
            $cities = City::with('tempatWisata')->whereIn('province_id', $this->selectedProvinces)->get();
            $city_ids = [];
            foreach ($cities as $city){
                array_push($city_ids, $city->id);
            }
            $tempatWisata = TempatWisata::whereIn('city_id', $city_ids)->paginate(10);
        } else {
            $tempatWisata = TempatWisata::paginate(10);
        }
        return view('livewire.wisata-filter', compact('tempatWisata'));
    }

    public function updatedselectedProvinces($province)
    {
        foreach ($this->selectedProvinces as $key => $value){
            if(!$value){
                unset($this->selectedProvinces[$key]);
            }
        }

    }

}
