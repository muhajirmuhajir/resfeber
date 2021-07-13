<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produk;
use App\Models\Ticket;
use App\Models\Ulasan;
use App\Models\Facility;
use App\Models\Location;
use App\Models\TempatWisata;
use Illuminate\Database\Seeder;
use App\Models\MediaTempatWisata;
use App\Models\Paket;
use App\Models\TourTravel;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class
        ]);

        if (App::environment('local')) {
            // admin
            User::factory()->admin()->create(['name' => 'Muhajir admin', 'email' => 'hajir.nf@gmail.com']);
            //tempat wisata
            TempatWisata::factory()->has(Location::factory())->has(Produk::factory()->count(5))->has(Facility::factory()->count(5))->has(Ticket::factory()->count(4))->has(MediaTempatWisata::factory()->count(5))->count(10)->create();

            // ulasan
            User::factory()->has(Ulasan::factory())->count(20)->create();

            // Travel
            TourTravel::factory()->has(Paket::factory()->count(5))->count(5)->create();
        }
    }
}
