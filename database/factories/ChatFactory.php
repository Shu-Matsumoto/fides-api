<?php

namespace Database\Factories;

use App\Models\Chat;
use App\Models\ActorUser;
use App\Models\MakerUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
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
            'actor_user_id' => ActorUser::factory(),
            'maker_user_id' => MakerUser::factory(),
            'sender_dir' => 0,
            'comment' => $faker->realText(),
            'send_time' => now(),
        ];
    }
}
