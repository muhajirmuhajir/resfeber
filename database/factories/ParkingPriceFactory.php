<?php

namespace Database\Factories;

use App\Models\ParkingPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParkingPriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParkingPrice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis' => $this->faker->lexify('Kendaraan ?'),
            'price' => $this->faker->numberBetween(2000, 10000)
        ];
    }
}
