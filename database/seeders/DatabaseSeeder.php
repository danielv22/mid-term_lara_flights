<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\FlightFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Using a Factory FlightFactory.
        \App\Models\Flight::factory(50)->create();

        // Using Query Builder to insert data.
        /*DB::table('flights')->insert([
            [
                'fl_date' => '2023-09-19',
                'fl_origin_airport' => 'CGK',
                'fl_origin_city' => 'Jakarta, IDN',
                'fl_destination_airport' => 'DPS',
                'fl_destination_city' => 'Denpasar, IDN',
                'fl_airline' => 'Garuda Indonesia',
                'fl_distance' => 611,
                'fl_img' => 'https://i.ytimg.com/vi/gjQbx_cpF60/maxresdefault.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ], [
                'fl_date' => '2023-10-26',
                'fl_origin_airport' => 'LAX',
                'fl_origin_city' => 'Los Angeles, CA',
                'fl_destination_airport' => 'LAS',
                'fl_destination_city' => 'Las Vegas, NV',
                'fl_airline' => 'LATAM Airlines',
                'fl_distance' => 95400,
                'fl_img' => 'https://media.staticontent.com/media/pictures/e9c476fc-b890-458d-95b6-fdc9e6b4b5c4',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);*/
    }
}
