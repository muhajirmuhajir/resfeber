<?php

namespace Database\Factories;

use App\Models\Paket;
use App\Models\TourTravel;
use App\Models\TempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paket::class;

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
            'tour_travel_id' => function(){
                return TourTravel::factory()->create()->id;
            },
            'name' => $this->faker->lexify('Paket ?'),
            'description' => $this->faker->text(),
            'price' => $this->faker->numberBetween(150000, 500000)
        ];
    }
}
