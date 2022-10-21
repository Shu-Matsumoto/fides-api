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
            'email' => Str::random(10),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_name' => $this->faker->name(),
            'real_name' => $this->faker->name(),
            'image_path' => 'https://www.sanspo.com/resizer/Oh_oUr1rJKhTOQSeRLLoiT1IWOY=/1024x768/filters:focal(644x374:654x384):quality(50)/cloudfront-ap-northeast-1.images.arcpublishing.com/sankei/QOJ5VKZ57RKLFIORMAYXKVYBUA.jpg',
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
