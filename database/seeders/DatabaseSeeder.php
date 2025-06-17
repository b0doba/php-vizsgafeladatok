<?php

namespace Database\Seeders;

use App\Models\Departures;
use App\Models\Destination;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Destination::factory(10)->create()->each(function ($destination) {
            Departures::factory(3)->create([
                'destination_id' => $destination->id,
            ]);
        });
    }
}
