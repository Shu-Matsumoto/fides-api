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
            'actor_schedule_id' => \App\Models\ActorSchedule::factory(),
            'maker_user_id' => \App\Models\MakerUser::factory(),
            'status' => 1, // オファー中
            'fee' => 1000000,
            'title' => 'パーフェクトコスプレSUPER',
            'summary' => '全コスプレハイクオリティ保証！！コスプレ大好き佐倉絆が5種類のかわいい衣装を身にまとって大変身！！完璧な2次元キャラクターとなったきずぽん。各種世界観の中でリアルワードを連発しエロショートドラマが繰り広げられる。次第にエッチな物語展開となる中、セックスでイキまくるコス姿の絆がめちゃエロい！！',
            'date_time' => '2022/10/30 10:00 - 2022/10/30 18:00',
            'place' => '福岡県福岡市中央区大名 99-99-99',
            'makeup' => 1,
            'rental_costume' => 1,
            'private_room' => 1,
            'shared_room' => 0,
            'pick_up' => 1,
            'meal' => 1,
            'message' => '正式に出演依頼を提出させていただきます。どうぞよろしくお願いいたします。',



        ];
    }
}
