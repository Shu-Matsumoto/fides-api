<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\actor_profile;
use App\Models\play_condition;

class LocalDevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIdCount = 0;

        // 空ユーザーの確保(ID:1~5)
        for ($index = 1; $index <= 5; $index++) {
            User::factory()->count(1)->create([
                'login_id' => ('empty' . (string)$index),
                'is_admin' => 1,
            ]);
            $userIdCount++;
        }

        // 女優ユーザー(ID:6~10)
        for ($index = 1; $index <= 5; $index++) {
            User::factory()->count(1)->create([
                'login_id' => ('actor' . (string)$index),
                'type' => 1,
                'is_admin' => 0,
            ]);
            $userIdCount++;
            actor_profile::factory()->count(1)->create([
                'user_id' => $userIdCount,
            ]);
            play_condition::factory()->count(1)->create([
                'user_id' => $userIdCount,
            ]);
        }

        // 制作会社ユーザー(ID:11~15)
        for ($index = 1; $index <= 5; $index++) {
            User::factory()->count(1)->create([
                'login_id' => ('maker' . (string)$index),
                'type' => 2,
                'is_admin' => 0,
            ]);
            $userIdCount++;
            actor_profile::factory()->count(1)->create([
                'user_id' => $userIdCount,
            ]);
            play_condition::factory()->count(1)->create([
                'user_id' => $userIdCount,
            ]);
        }
    }
}
