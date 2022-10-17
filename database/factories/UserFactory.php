<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_name' => fake()->name(),
            'real_name' => fake()->name(),
            'image_path' => '',
            'birthday' => '2022/12/12 00:00:00',
            'blood_type' => 1,
            'height' => 160,
            'weight' => 45,
            'clothes_size' => 1,
            'shoes_size' => 1,
            'breast_size' => 1,
            'breast_top_size' => 90,
            'breast_under_size' => 75,
            'waist_size' => 55,
            'hip_size' => 85,
            'open' => 0,
            'is_admin' => 0,
            'is_deleted' => 0,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
