<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\actor_profile>
 */
class Actor_ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'actress_name' => fake()->name(),
            'real_name' => fake()->name(),
            'birthday' => '2022-12-25 00:00:00',
            'blood_type' => 0,
            'height' => 160,
            'weight' => 45,
            'clothes_size' => 0,
            'shoes_size' => 0,
            'breast_size' => 0,
            'breast_top' => 90,
            'breast_under' => 75,
            'waist_size' => 65,
            'hip_size' => 85,
        ];
    }
}
