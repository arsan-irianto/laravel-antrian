<?php

namespace Database\Factories;

use App\Models\Antrian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Antrian>
 */
class AntrianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal' => date('Y-m-d'),
            'status' => 'Q'
        ];
    }
}
