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
            'title' => 'ネチョネチョ、レロレロ 大人のベロキス誘惑接吻レクチャー',
            'summary' => '甘く、激しく誘惑接吻レクチャー！！ヨダレだらだら唾液ねっちょりレロレロ…キスで求め合う超濃厚エクスタシー！見つめて感じる大人の接吻SEX！キスの女神、ありーな。やっぱりエロい。舌を絡ませて唾液交換、唇を重ね合ってピストン！！ヨダレたっぷりベロキス6コーナー3本番！！キスがへたっぴなアナタのために…優しくてエロい手ほどきキスリードSEX！！',
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
