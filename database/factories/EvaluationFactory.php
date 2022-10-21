<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\User;
use App\Models\Maker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
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
            'maker_user_id' => Maker::factory(),
            'sender_dir' => 0,
            'evaluation' => 1,
            'comment' => fake()->realText(),

        ];
    }
}
