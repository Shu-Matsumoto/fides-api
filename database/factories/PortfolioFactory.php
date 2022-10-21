<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ActorUser;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
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
            'user_id' => ActorUser::factory(),
            'title' => fake()->text(),
            'image_path' => 'https://cdn.up-timely.com/image/30/content/61435/qXMNnjDgh6ClwOdv42pMwsc4QUZZJjM7oSvfx649.jpg',
            'url' => 'https://moodyz.com/top',
        ];
    }
}
