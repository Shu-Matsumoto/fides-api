<?php

namespace Database\Factories;

use App\Models\ActorUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActorUser>
 */
class ActorUserFactory extends Factory
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
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_name' => $this->faker->name(),
            'real_name' => $this->faker->name(),
            'image_path' => 'storage/images/userprofile/itou_mayuki.jpg',
            'birthday' => '1990-10-28',
            'blood_type' => 1,
            'height' => 160,
            'weight' => 45,
            'clothes_size' => 0,
            'shoes_size' => 0,
            'breast_size' => 0,
            'breast_top_size' => 70,
            'breast_under_size' => 50,
            'waist_size' => 50,
            'hip_size' => 70,
            'open' => 0,
            'is_admin' => 0,
            'is_deleted' => 0,
        ];
    }
}
