<?php

namespace Database\Factories;

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
            'email' => $faker->email,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'maker_name' => $faker->company,
            'image_path' => 'https://girl-secret.com/wp-content/uploads//2019/07/9a4b0c6d3948389eff5e1accb205758a.jpg',
            'url' => 'https://www.dmm.co.jp/digital/',
        ];
    }
}
