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
            'actor_user_id' => \App\Models\ActorUser::factory(),
            'maker_user_id' => \App\Models\MakerUser::factory(),
            'sender_dir' => 1, // 女優⇒メーカー
            'breach_contract' => 1,
            'withdrawal_negotiation' => 2,
            'business_interruption' => 2,
            'nuisance' => 2,
            'other' => 2,
            'explanation_text' => '出演料が振込期日までに振り込まれていません。\n担当者から遅延の連絡もなく、現在連絡がつかない状況です。',

        ];
    }
}
