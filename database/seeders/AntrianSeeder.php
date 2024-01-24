<?php

namespace Database\Seeders;

use App\Models\Antrian;
use Illuminate\Database\Seeder;

class AntrianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Antrian::factory()
            ->count(100)
            ->sequence(fn ($sequence) => ['nomor' => sprintf('%03d', $sequence->index + 1)])
            ->create();
    }
}

