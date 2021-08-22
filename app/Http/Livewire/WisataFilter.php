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
    public $city;
    protected $queryString = ['selectedProvinces', 'city'];
    public $provinces;

    public function mount()
    {
        $this->selectedProvinces = [];
        $this->provinces = Province::whereHas('cities.tempatWIsata')->get();;
    }
    public function render()
    {
        if (sizeof($this->selectedProvinces) > 0) {
            $cities = City::with('tempatWisata')->whereIn('province_id', $this->selectedProvinces)->get();
            $city_ids = [];
            foreach ($cities as $city){
                array_push($city_ids, $city->id);
            }
            $tempatWisata = TempatWisata::with(['thumbnail', 'city.province', 'facilities'])->whereIn('city_id', $city_ids)->where('status', 'PUBLISH')->paginate(10);
        } else {
            if($this->city){
                $city = City::where('name', $this->city)->first();
                $tempatWisata = TempatWisata::with(['thumbnail', 'city.province', 'facilities'])->where('status', 'PUBLISH')->where('city_id', $city->id)->paginate(10);
            }else{
                $tempatWisata = TempatWisata::with(['thumbnail', 'city.province', 'facilities'])->where('status', 'PUBLISH')->paginate(10);
            }

        }
        return view('livewire.wisata-filter', compact('tempatWisata'));
    }

    public function updatedselectedProvinces($province)
    {
        $this->city = null;
        foreach ($this->selectedProvinces as $key => $value){
            if(!$value){
                unset($this->selectedProvinces[$key]);
            }
        }

    }

}
