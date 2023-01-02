<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobil>
 */
class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nopol' => fake()->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'merk' => fake()->unique()->firstName(),
            'model' => fake()->company,
            'tahun' => fake()->date(),
            'warna' => fake()->colorName(),
            'harga_sewa' => fake()->numberBetween(10000, 1000000),
            'gambar' => Str::random(10),
        ];
    }
}
