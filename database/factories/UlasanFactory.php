<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Ulasan;
use Illuminate\Database\Eloquent\Factories\Factory;

class UlasanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ulasan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function(){
                return User::factory()->create()->id;
            },
            'tempat_wisata_id' => $this->faker->numberBetween(1, 10),
            'star_count' => $this->faker->numberBetween(3, 10),
            'comment' => $this->faker->realText()
        ];
    }
}
