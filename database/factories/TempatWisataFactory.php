<?php

namespace Database\Factories;

use App\Models\TempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class TempatWisataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TempatWisata::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ['PUBLISH', 'DRAFT'];
        return [
            'name' => $this->faker->streetName(),
            'slug' => $this->faker->slug(),
            'city_id'=> $this->faker->numberBetween(0, 488),
            'contact' => $this->faker->phoneNumber(),
            'history' => $this->faker->paragraph(6, false),
            'jam_buka' => $this->faker->time(),
            'jam_tutup' => $this->faker->time(),
            'status' => $status[$this->faker->numberBetween(0,1)],
        ];
    }
}
