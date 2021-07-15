<?php

namespace Database\Factories;

use App\Models\TempatWisata;
use App\Models\MediaTempatWisata;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaTempatWisataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MediaTempatWisata::class;

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
            'media_url' =>'thumbnails/default.jpg'
        ];
    }
}
