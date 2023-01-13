<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Mobil;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->randomElement(Customer::all())['nik'],
            'nopol' => $this->faker->randomElement(Mobil::all())['nopol'],
            'tanggal_rental' => fake()->date(),
            'tanggal_kembali' => fake()->date(),
            'durasi' => fake()->numberBetween(1, 10),
            'total_harga' => fake()->numberBetween(100000, 200000),
        ];
    }
}
