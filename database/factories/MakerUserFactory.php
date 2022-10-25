<?php

namespace Database\Factories;

use App\Models\System_acount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MakerUser>
 */
class MakerUserFactory extends Factory
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
            'maker_name' => 'ソフト・オン・デマンド株式会社',
            'image_path' => 'storage/images/makerprofile/sod.png',
            'url' => 'https://www.sod.co.jp/',
        ];
    }
}
