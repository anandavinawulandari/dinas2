<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registrant>
 */
class RegistrantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jenis_surat' => $this->faker->name(),
            'bidang' => $this->faker->bidang(),
            'created_at'=> $this->faker->dateTimeThisMonth($max = 'now', $timezone = null) 
        ];
    }
}
