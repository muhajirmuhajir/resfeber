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

        return [
            'name' => $this->faker->streetName(),
            'slug' => $this->faker->slug(),
            'contact' => $this->faker->phoneNumber(),
            'history' => $this->faker->paragraph(6, false),
            'jam_buka' => '06:00',
            'jam_tutup' => '18:00',
            'status' => 'PUBLISH'
        ];
    }
}
