<?php

namespace Database\Factories;

use App\Models\Produk;
use App\Models\TempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produk::class;

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
            'name' => $this->faker->lexify('Produk ??'),
            'description' => $this->faker->sentence(),
        ];
    }
}
