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
            ['user_name' => '佐倉絆', 'image_path' => 'storage/images/userprofile/佐倉絆.jpeg'],
            ['user_name' => '羽生ありさ', 'image_path' => 'storage/images/userprofile/羽生ありさ.jpeg'],
            ['user_name' => '紺野ひかる', 'image_path' => 'storage/images/userprofile/紺野ひかる.jpeg'],
            ['user_name' => '彩奈リナ', 'image_path' => 'storage/images/userprofile/彩奈リナ.png'],
            ['user_name' => '若月みいな', 'image_path' => 'storage/images/userprofile/若月みいな.jpeg'],
            ['user_name' => '大槻ひびき', 'image_path' => 'storage/images/userprofile/大槻ひびき.jpeg'],
            ['user_name' => '天使もえ', 'image_path' => 'storage/images/userprofile/天使もえ.jpeg'],
            ['user_name' => '南梨央奈', 'image_path' => 'storage/images/userprofile/南梨央奈.jpeg'],
            ['user_name' => '波多野結衣', 'image_path' => 'storage/images/userprofile/波多野結衣.jpeg'],
            ['user_name' => '浜崎真緒', 'image_path' => 'storage/images/userprofile/浜崎真緒.jpeg'],
        ];

        $portfolioDatas = [
            ['title' => '引退', 'image_path' => 'storage/images/portfolio/sakura_kizuna1.jpg', 'url' => 'https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=84mkmp00324/?i3_ref=search&i3_ord=36'],
            ['title' => 'カワイイキャラコスプレ', 'image_path' => 'storage/images/portfolio/sakura_kizuna2.jpg', 'url' => 'https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=84mkmp00279/?i3_ref=search&i3_ord=23'],
            ['title' => 'パーフェクトコスプレSUPER', 'image_path' => 'storage/images/portfolio/sakura_kizuna3.jpg', 'url' => 'https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=84mkmp00205/?i3_ref=search&i3_ord=41'],
            ['title' => '潜入捜査官', 'image_path' => 'storage/images/portfolio/sakura_kizuna4.jpg', 'url' => 'https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=84mild00960/?i3_ref=search&i3_ord=84'],
            ['title' => 'デビュー1周年記念', 'image_path' => 'storage/images/portfolio/sakura_kizuna5.jpg', 'url' => 'https://www.dmm.co.jp/digital/videoa/-/detail/=/cid=84mkmp00002/?i3_ref=search&i3_ord=115'],
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
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '1', 'comment' => '始めまして佐倉絆と申します。', 'send_time' => '2022/10/28 10:01:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => '佐倉さんのプロフィールを拝見いたしました。', 'send_time' => '2022/10/28 10:01:23'],
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
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '1', 'comment' => '始めまして佐倉絆と申します。', 'send_time' => '2022/10/28 10:01:00'],
            ['actor_user_id' => $actor_id, 'maker_user_id' => $maker_id, 'sender_dir' => '2', 'comment' => '佐倉さんのプロフィールを拝見いたしました。', 'send_time' => '2022/10/28 10:01:23'],
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
