<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\play_condition>
 */
class Play_ConditionFactory extends Factory
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
            'honban' => 0,
            'gomunashi' => 0,
            'nakadashi' => 0,
            'ferachio' => 0,
            'iramachio' => 0,
        ];
    }
}
