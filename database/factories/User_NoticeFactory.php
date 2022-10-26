<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_notice>
 */
class User_NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'actor_user_id' => \App\Models\ActorUser::factory(),
            'maker_user_id' => \App\Models\MakerUser::factory(),
            'user_type' => 0,
            'type' => 0,
            'already_read' => 0,
            'category' => 0,
            'information_id' => 0,
            'title' => '',
            'sub_title' => '',
        ];
    }
}
