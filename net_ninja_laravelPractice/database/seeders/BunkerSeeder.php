<?php

namespace Database\Seeders;

use App\Models\Bunker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BunkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bunker::factory()->count(5)->create();
    }
}
