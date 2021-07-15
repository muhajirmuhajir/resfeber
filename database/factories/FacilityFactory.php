<?php

namespace Database\Factories;

use App\Models\Facility;
use App\Models\TempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacilityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facility::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tempat_wisata_id' => function(){
                return TempatWisata::factory()->create()->id;
            },
            'name' => $this->faker->lexify('Fasilitas ???')
        ];
    }
}
