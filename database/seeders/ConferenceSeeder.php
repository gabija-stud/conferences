<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Conference::create([
            'name' => 'Vilniaus Conference',
            'description' => 'An annual conference for Vilnius ambassadors',
            'start_date' => '2023-05-13 09:00:00',
            'end_date' => '2023-05-14 18:00:00',
        ]);

        Conference::create([
            'name' => 'Pet Conference',
            'description' => 'An annual conference for pet caretakers',
            'start_date' => '2023-06-20 09:00:00',
            'end_date' => '2023-06-22 18:00:00',
        ]);
    }

}
