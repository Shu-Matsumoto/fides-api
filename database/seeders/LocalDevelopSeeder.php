<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ActorUser;
use App\Models\MakerUser;
use App\Models\play_condition;
use App\Models\Portfolio;
use App\Models\System_acount;
use App\Models\Chat;
use App\Models\ActorSchedule;
use App\Models\Offer;
use App\Models\OfferResponse;

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

        // 空女優ユーザーの確保(ID:1~5)
        for ($index = 1; $index <= 5; $index++) {
            ActorUser::factory()->count(1)->create([
                'is_admin' => 1,
                'acount_id' => 1,
            ]);
        }

        // 空メーカーユーザーの確保(ID:1~5)
        for ($index = 1; $index <= 5; $index++) {
            MakerUser::factory()->count(1)->create([
                'acount_id' => 2,
            ]);
        }

        // 女優データ
        $actorDatas = [
            ['user_name' => '河北彩花', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/image20-min.jpg'],
            ['user_name' => '本郷愛', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/image3-min.jpg'],
            ['user_name' => '石原希望', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/image15-min.jpg'],
            ['user_name' => '青空ひかり', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/image17-min.jpg'],
            ['user_name' => '楪カレン', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/%E6%A5%AA%E3%82%AB%E3%83%AC%E3%83%B3-min.jpg'],
            ['user_name' => '小野六花', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/image27-min.jpg'],
            ['user_name' => '愛宝すず', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/image13-min.png'],
            ['user_name' => '楓カレン', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/%E7%AC%AC5%E4%BD%8D%EF%BC%9A%E6%A5%93%E3%82%AB%E3%83%AC%E3%83%B3.jpg'],
            ['user_name' => '八掛うみ', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/%E7%AC%AC1%E4%BD%8D%EF%BC%9A%E5%85%AB%E6%8E%9B%E3%81%86%E3%81%BF.jpg'],
            ['user_name' => '松本いちか', 'image_path' => 'https://cdn.pan-pan.co/w_800,q_80/wp-content/uploads/2021/02/%E7%AC%AC11%E4%BD%8D%EF%BC%9A%E6%9D%BE%E6%9C%AC%E3%81%84%E3%81%A1%E3%81%8B.jpg'],
        ];

        $portfolioDatas = [
            ['title' => '作品タイトル1', 'image_path' => 'https://pics.dmm.co.jp/mono/movie/adult/ofje380/ofje380ps.jpg', 'url' => 'https://www.dmm.co.jp/mono/dvd/-/detail/=/cid=ofje380/?dmmref=aMonoDvd_List'],
            ['title' => '作品タイトル2', 'image_path' => 'https://pics.dmm.co.jp/mono/movie/adult/ssis560/ssis560ps.jpg', 'url' => 'https://www.dmm.co.jp/mono/dvd/-/detail/=/cid=ssis560/?dmmref=aMonoDvd_List'],
            ['title' => '作品タイトル3 ', 'image_path' => 'https://pics.dmm.co.jp/mono/movie/adult/ssis387/ssis387ps.jpg', 'url' => 'https://www.dmm.co.jp/mono/dvd/-/detail/=/cid=ssis387/?dmmref=aMonoDvd_List'],
            ['title' => '作品タイトル4', 'image_path' => 'https://pics.dmm.co.jp/mono/movie/adult/ssis413/ssis413ps.jpg', 'url' => 'https://www.dmm.co.jp/mono/dvd/-/detail/=/cid=ssis413/?dmmref=aMonoDvd_List'],
            ['title' => '作品タイトル5', 'image_path' => 'https://pics.dmm.co.jp/mono/movie/adult/oae214/oae214ps.jpg', 'url' => 'https://www.dmm.co.jp/mono/dvd/-/detail/=/cid=oae214/?dmmref=aMonoDvd_List'],
        ];

        $actorScheduleDatas = [
            ['start_time' => '2022/10/1 10:00:00', 'end_time' => '2022/10/1 18:00:00'],
            ['start_time' => '2022/10/8 10:00:00', 'end_time' => '2022/10/8 18:00:00'],
            ['start_time' => '2022/10/15 10:00:00', 'end_time' => '2022/10/15 18:00:00'],
            ['start_time' => '2022/10/21 0:00:00', 'end_time' => '2022/10/23 00:00:00'],
            ['start_time' => '2022/10/29 10:00:00', 'end_time' => '2022/10/29 18:00:00'],
        ];

        foreach ($actorDatas as $index => $value) {
            $userId = ActorUser::factory()->count(1)->create([
                'email' => 'actor' . $index . '@gmaaaaaail.com',
                'acount_id' => 1,
                'user_name' => $value['user_name'],
                'image_path' => $value['image_path']
            ]);

            play_condition::factory()->count(1)->create([
                'user_id' => $userId[0]
            ]);

            //portfolioを増やす,一人につき複数ある
            foreach ($portfolioDatas as $index => $value) {
                portfolio::factory()->count(1)->create([
                    'user_id' => $userId[0],
                    'title' => $value['title'],
                    'image_path' => $value['image_path'],
                    'url' => $value['url'],
                ]);
            }

            // 女優スケジュール
            foreach ($actorScheduleDatas as $index => $value) {
                ActorSchedule::factory()->count(1)->create([
                    'actor_user_id' => $userId[0],
                    'maker_user_id' => 1,
                    'start_time' => $value['start_time'],
                    'end_time' => $value['end_time']
                ]);
            }
        }

        // // 女優ユーザー(ID:6~10)
        // for ($index = 1; $index <= 5; $index++) {
        //     if ($index == 1) {
        //         ActorUser::factory()->count(1)->create([
        //             'email' => 'actor1@gmaaaaaail.com',
        //             'acount_id' => 1,
        //         ]);
        //     } else {
        //         ActorUser::factory()->count(1)->create([
        //             'acount_id' => 1,
        //         ]);
        //     }
        //     $userIdCount++;
        //     play_condition::factory()->count(1)->create([
        //         'user_id' => $userIdCount,
        //     ]);

        //     //portfolioを増やす,一人につき複数ある
        //     for ($index2 = 1; $index2 <= 5; $index2++) {
        //         portfolio::factory()->count(1)->create([
        //             'user_id' => $userIdCount,
        //         ]);
        //     }
        // }

        // メーカーデータ
        $makerDatas = [
            ['maker_name' => 'ソフト・オン・デマンド株式会社', 'image_path' => 'storage/images/makerprofile/sod.png'],
            ['maker_name' => '有限会社プレステージ', 'image_path' => 'storage/images/makerprofile/prestige.png'],
        ];

        foreach ($makerDatas as $index => $value) {
            $userId = MakerUser::factory()->count(1)->create([
                'email' => 'maker' . $index . '@gmaaaaaail.com',
                'acount_id' => 2,
                'maker_name' => $value['maker_name'],
                'image_path' => $value['image_path']
            ]);
        }

        // // 制作会社ユーザー(ID:11~15)
        // for ($index = 1; $index <= 5; $index++) {
        //     if ($index == 1) {
        //         MakerUser::factory()->count(1)->create([
        //             'email' => 'makermakermaker@gmaaaaaail.com',
        //             'acount_id' => 2,
        //         ]);
        //     } else {
        //         MakerUser::factory()->count(1)->create([
        //             'acount_id' => 2,
        //         ]);
        //     }
        //     $userIdCount++;
        // }

        // チャットデータ作成
        $this->createChatDatas();
        // 出演依頼データ作成
        $this->createOfferDatas();
    }

    // チャットデータ作成
    function createChatDatas()
    {
        // ユーザー6とのやりとり
        $actor_id = 6;
        $maker_id = 6;

        $chatDatas = [
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => 'SODの佐藤と申します。', 'send_time' => '2022/10/28 10:00:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '1', 'comment' => '始めまして鈴木花子と申します。', 'send_time' => '2022/10/28 10:01:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => '鈴木さんのプロフィールを拝見いたしました。', 'send_time' => '2022/10/28 10:01:23'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => '弊社AVの出演の交渉をさせていただきたいのですがよろしいでしょうか。', 'send_time' => '2022/10/28 10:02:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '1', 'comment' => 'はい、もちろんです。', 'send_time' => '2022/10/28 10:03:45']
        ];

        foreach ($chatDatas as $index => $value) {
            Chat::factory()->count(1)->create([
                'actor_user_id' => $value['actor_user_id'],
                'maker_user_id' => $value['maker_user_id'],
                'sender_dir' => $value['sender_dir'],
                'comment' => $value['comment'],
                'send_time' => $value['send_time'],
            ]);
        }

        $actor_id = 6;
        $maker_id = 7;

        $chatDatas2 = [
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => 'PRESTAGEの佐藤と申します。', 'send_time' => '2022/10/28 10:00:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '1', 'comment' => '始めまして鈴木花子と申します。', 'send_time' => '2022/10/28 10:01:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => '鈴木さんのプロフィールを拝見いたしました。', 'send_time' => '2022/10/28 10:01:23'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => '弊社AVの出演の交渉をさせていただきたいのですがよろしいでしょうか。', 'send_time' => '2022/10/28 10:02:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '1', 'comment' => 'はい、もちろんです。', 'send_time' => '2022/10/28 10:03:45']
        ];

        foreach ($chatDatas2 as $index => $value) {
            Chat::factory()->count(1)->create([
                'actor_user_id' => $value['actor_user_id'],
                'maker_user_id' => $value['maker_user_id'],
                'sender_dir' => $value['sender_dir'],
                'comment' => $value['comment'],
                'send_time' => $value['send_time'],
            ]);
        }
    }

    // 出演依頼データ作成
    function createOfferDatas()
    {
        $offerDatas = [
            ['actor_schedule_id' => 1, 'maker_user_id' => 6, 'fee' => 500000, 'title' => '作品タイトル1', 'message' => '正式に出演オファーさせていただきます。',],
            ['actor_schedule_id' => 2, 'maker_user_id' => 6, 'fee' => 1000000, 'title' => '作品タイトル2', 'message' => '正式に出演オファーさせていただきます。',],
            ['actor_schedule_id' => 1, 'maker_user_id' => 7, 'fee' => 500000, 'title' => '作品タイトル3', 'message' => '出演オファーです。ご検討ください。',],
        ];

        foreach ($offerDatas as $index => $value) {
            Offer::factory()->count(1)->create([
                'actor_schedule_id' => $value['actor_schedule_id'],
                'maker_user_id' => $value['maker_user_id'],
                'fee' => $value['fee'],
                'title' => $value['title'],
                'message' => $value['message'],
            ]);
        }
    }
}
