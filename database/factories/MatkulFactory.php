<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class MatkulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 50),
            'nama_matakuliah' => ucwords(fake()->sentence()),
            'semester' => rand(1, 9),
        ];
    }
}
