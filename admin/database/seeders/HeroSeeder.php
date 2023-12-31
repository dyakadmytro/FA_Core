<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\HeroData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::factory(10)->has(HeroData::factory(), 'data')->create();
    }
}
