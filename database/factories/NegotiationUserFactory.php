<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NegotiationUser>
 */
class NegotiationUserFactory extends Factory
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
            'actor_user_id' => Str::random(10),
            'maker_user_id' => Str::random(10),
            'active' => 0,
            'is_deleted' =>0,
        ];
    }
}
