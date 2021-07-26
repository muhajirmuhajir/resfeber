<?php

namespace Database\Factories;

use App\Models\TourTravel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourTravelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TourTravel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('Travel ???'),
            'description' => $this->faker->sentence(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'thumbnail' => 'empty',
        ];
    }
}
