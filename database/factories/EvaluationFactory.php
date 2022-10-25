<?php

namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\ActorUser;
use App\Models\MakerUser;
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
            'maker_user_id' => MakerUser::factory(),
            'sender_dir' => 1, // 女優⇒メーカー
            'evaluation' => 1, // 1:good, 2:Normal, 3:Bad
            'comment' => '現場スタッフさんの撮影技術が神でした！現場での対応も皆さん優しすぎて居心地良すぎました。撮影当日までの進行もスムーズで安心できました。また呼んでいただきたい現場でした。',

        ];
    }
}
