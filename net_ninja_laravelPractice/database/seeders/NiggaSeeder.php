<?php

namespace Database\Seeders;
use App\Models\Nigga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiggaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nigga::factory()->count(10)->create();
    }
}
