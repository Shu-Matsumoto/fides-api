<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Da
 *  ase\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
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
            'actor_schedule_id' => ActorSchdule::factory,
            'maker_user_id' => MakerUser::factory,
        //    'actor_user_id' => ActorUser::factory,
            'status' => 0,
            'fee' => 1000000,
            'title' => fake()->title(),
            'summary'=> fake()->realText(),
            'date_time' => '2022-10-30',
            'place' => fake()-> address(),
            'makeup' => 0,
            'rental_costume' => 0,
            'private_room' => 0,
            'shared_room' => 0,
            'pick_up' => 0,
            'meal' => 0,
            'message' =>fake()->realText(),



        ];
    }
}
