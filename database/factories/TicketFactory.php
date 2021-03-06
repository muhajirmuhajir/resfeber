<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\TempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

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
            'name' => $this->faker->lexify('Tiket ?'),
            'price' => $this->faker->numberBetween(10000, 50000)
        ];
    }
}
