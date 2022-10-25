<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ActorUser;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
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
            'user_id' => ActorUser::factory(),
            'title' => 'AV女優ありな先生のネチョネチョ、レロレロ 大人のベロキス誘惑接吻レクチャー',
            'image_path' => 'storage/images/portfolio/portfolio1.jpg',
            'url' => 'https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=midv00214/?dmmref=digital_top_pickup_pc&i3_ref=recommend&i3_ord=2',
        ];
    }
}
