<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pesertas>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'nomor' => $this->faker->unique()->randomNumber(9),
            // 'nama_team' => $this->faker->company,
            // 'nama' => $this->faker->name,
            // 'email' => $this->faker->unique()->safeEmail,
            // 'telepon' => $this->faker->phoneNumber,
            // 'event' => $this->faker->randomElement(['olimpiade', 'public-poster']),
            // 'password' => bcrypt('pass'),
            // 'status_pembayaran' => $this->faker->randomElement(['lunas', 'belum']),
        ];
    }
}
