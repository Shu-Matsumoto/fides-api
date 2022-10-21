<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ActorUser;
use App\Models\MakerUser;
use App\Models\play_condition;
use App\Models\Portfolio;
use App\Models\System_acount;

class LocalDevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //system

        System_acount::factory()->count(1)->create([
            'login_id' => 'sys1',
            'type' => 1,
        ]);

        System_acount::factory()->count(1)->create([
            'login_id' => 'sys2',
            'type' => 2,
        ]);

        $userIdCount = 0;
        // 空ユーザーの確保(ID:1~5)
        for ($index = 1; $index <= 5; $index++) {
            ActorUser::factory()->count(1)->create([
                'is_admin' => 1,
                'acount_id' => 1,
            ]);
            $userIdCount++;
        }

        // 女優ユーザー(ID:6~10)
        for ($index = 1; $index <= 5; $index++) {
            if ($index == 1) {
                ActorUser::factory()->count(1)->create([
                    'email' => 'actoractoractor@gmaaaaaail.com',
                    'is_admin' => 0,
                    'acount_id' => 1,
                ]);
            } else {
                ActorUser::factory()->count(1)->create([
                    'is_admin' => 0,
                    'acount_id' => 1,
                ]);
            }
            $userIdCount++;
            play_condition::factory()->count(1)->create([
                'user_id' => $userIdCount,
            ]);

            //portfolioを増やす,一人につき複数ある
            for ($index2 = 1; $index2 <= 5; $index2++) {
                portfolio::factory()->count(1)->create([
                    'user_id' => $userIdCount,
                ]);
            }
        }

        $userIdCount = 0;
        // 空ユーザーの確保(ID:1~5)
        for ($index = 1; $index <= 5; $index++) {
            MakerUser::factory()->count(1)->create([
                // 'is_admin' => 1,
                'acount_id' => 2,
            ]);
            $userIdCount++;
        }

        // 制作会社ユーザー(ID:11~15)
        for ($index = 1; $index <= 5; $index++) {
            if ($index == 1) {
                MakerUser::factory()->count(1)->create([
                    'email' => 'makermakermaker@gmaaaaaail.com',
                    // 'is_admin' => 0,
                    'acount_id' => 2,
                ]);
            } else {
                MakerUser::factory()->count(1)->create([
                    // 'is_admin' => 0,
                    'acount_id' => 2,
                ]);
            }
            $userIdCount++;
        }
    }
}
