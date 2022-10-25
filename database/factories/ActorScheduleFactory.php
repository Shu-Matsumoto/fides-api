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
            'actor_user_id' => \App\Models\ActorUser::factory(),
            'maker_user_id' => 1,
            'start_time' => '2022/10/28 10:00:00',
            'end_time' => '2022/11/28 18:00:00',
            'recruiting' => 0,
        ];
    }
}
