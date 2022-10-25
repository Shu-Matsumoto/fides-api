<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=App\Models\OfferResponse>
 */
class OfferResponseFactory extends Factory
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
            'offer_id' => \App\Models\Offer::factory(),
            'response' => 1,
            'message' => '今回は数いる素敵な女優さんの中から私を採用していただきありがとうございます。どうぞよろしくおねがいします。',


        ];
    }
}
