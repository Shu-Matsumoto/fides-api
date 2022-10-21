<?php

namespace Database\Factories;

use App\Models\ActorSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActorSchedule>
 */
class ActorScheduleFactory extends Factory
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
            'actor_user_id' =>ActorUser::factory(),
            'maker_user_id' =>MakerUser::factory(),
            'start_time' => '2022-10-28',
            'end_time' => '2022-11-28',
            'recruiting' => 0,
        ];
    }
}
