<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=App\Models\ViolationaReport>
 */
class ViolationReportFactory extends Factory
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
            'actor_user_id' => ActorUser::factory,
            'maker_user_id' => MakerUser::factory,
            'sender_dir' => 0,
            'breach_contract' => 0,
            'withdrawal_negotiation' => 0,
            'business_interruption' => 0,
            'nuisance' => 0,
            'other' => 0,
            'V' => fake()->realText(),

        ];
    }
}
