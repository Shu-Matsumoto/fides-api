<?php

namespace Database\Factories;

use App\Models\System_acount;
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
            'acount_id' => System_acount::factory(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_name' => $this->faker->name(),
            'real_name' => $this->faker->name(),
            'image_path' => 'storage/images/userprofile/itou_mayuki.jpg',
            'birthday' => '1990/10/28 0:0:0',
            'blood_type' => 1, // A
            'height' => 160,
            'weight' => 45,
            'clothes_size' => 3, // M
            'shoes_size' => 23,
            'breast_size' => 5, // E top-under=20cmでEカップ
            'breast_top_size' => 85,
            'breast_under_size' => 65,
            'waist_size' => 57,
            'hip_size' => 85,
            'open' => 2,
            'is_admin' => 2,
            'is_deleted' => 2,
        ];
    }
}
