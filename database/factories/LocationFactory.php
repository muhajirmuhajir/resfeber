<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\TempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->address(),
            'tempat_wisata_id' => function(){
                return TempatWisata::factory()->create()->id;
            },
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'city' => $this->faker->city(),
            'address' => $this->faker->address(),
        ];
    }
}
