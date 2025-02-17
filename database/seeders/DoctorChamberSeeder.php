<?php

namespace Database\Seeders;

use App\Models\DoctorChamber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorChamberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoctorChamber::factory()->create([
            'location' => 'Dhanmodi 2  Road#2 Block#4',
            'hospital_name' => 'Popular Diognostic Center',
            'contact_number' => '88023434234',
            'notes' => 'abcd'
        ]);
    }
}
