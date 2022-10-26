<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = \App\Models\OfferResponse::all();
        return response()->json([
            'message' => 'success',
            'data' => $datas,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = \App\Models\OfferResponse::create($request->all());

        // 契約時に各種テーブルレコードを変更する
        if ($response->response == 1 || $response->response == 2) {
            $offer = \App\Models\Offer::find($response->offer_id);
            $offer->status = 2; // 0:不定、1:オファー中、2:終了
            $offer->save();

            // 契約成立したオファーのみ女優スケジュールに正式に契約獲得したメーカーIDをセット
            if ($response->response == 1) {
                $schedule = \App\Models\ActorSchedule::find($offer->actor_schedule_id);
                $schedule->maker_user_id = $offer->maker_user_id;
                $schedule->recruiting = 2; // 0:不定, 1:募集中、2:募集終了
                $schedule->save();
            }
        }

        // 新規追加時にユーザーへ通知(出演依頼結果)を発行する
        if ($response->response == 1 || $response->response == 2) {
            $offer = \App\Models\Offer::find($response->offer_id);
            $schedule = \App\Models\ActorSchedule::find($offer->actor_schedule_id);
            $actor = \App\Models\ActorUser::find($schedule->actor_user_id);

            $notice = new \App\Models\UserNotice;
            $notice->actor_user_id = $schedule->actor_user_id;
            $notice->maker_user_id = $offer->maker_user_id;
            $notice->user_type = 2; // メーカーユーザー向け通知
            $notice->type = 1;
            $notice->already_read = 1; // 0:不定、1:未読、2:既読
            $notice->category = 3; // 0:不定、1:ノーマル、2:出演依頼、3:出演依頼返信、4:取引完了、
            $notice->information_id = $response->id; // offer_responseのIDを格納
            $notice->title = "出演依頼結果のお知らせ";
            $notice->sub_title = $actor->user_name . "さんから依頼結果が届きました。" .
                '  結果:' . ($response->response == 1 ? '【契約】' : '【未契約】');
            $notice->save();
        }

        // デモ用に仮実装
        // 新規追加時にユーザーへ通知(取引完了)を発行する
        if ($response->response == 1) {

            $offer = \App\Models\Offer::find($response->offer_id);
            $schedule = \App\Models\ActorSchedule::find($offer->actor_schedule_id);
            $actor = \App\Models\ActorUser::find($schedule->actor_user_id);

            $noticeA = new \App\Models\UserNotice;
            $noticeA->actor_user_id = $schedule->actor_user_id;
            $noticeA->maker_user_id = $offer->maker_user_id;
            $noticeA->user_type = 1; // 女優ユーザー向け通知
            $noticeA->type = 1;
            $noticeA->already_read = 1; // 0:不定、1:未読、2:既読
            $noticeA->category = 4; // 0:不定、1:ノーマル、2:出演依頼、3:出演依頼返信、4:取引完了確認依頼、
            $noticeA->information_id = $offer->id; // offerのIDを格納
            $noticeA->title = "撮影が完了しました。取引を完了させてください。";
            $noticeA->sub_title = '女優:[' . $actor->user_name . '], タイトル[' . $offer->title . ']';
            $noticeA->save();

            $noticeM = new \App\Models\UserNotice;
            $noticeM->actor_user_id = $schedule->actor_user_id;
            $noticeM->maker_user_id = $offer->maker_user_id;
            $noticeM->user_type = 2; // メーカーユーザー向け通知
            $noticeM->type = 1;
            $noticeM->already_read = 1; // 0:不定、1:未読、2:既読
            $noticeM->category = 4; // 0:不定、1:ノーマル、2:出演依頼、3:出演依頼返信、4:取引完了確認依頼、
            $noticeM->information_id = $offer->id; // offerのIDを格納
            $noticeM->title = "撮影が完了しました。取引を完了させてください。";
            $noticeM->sub_title = '女優:[' . $actor->user_name . '], タイトル[' . $offer->title . ']';
            $noticeM->save();
        }

        return response()->json([
            'message' => 'success',
            'data' => $response,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Models\OfferResponse::find($id);
        return response()->json([
            'message' => 'success',
            'data' => $data,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = \App\Models\OfferResponse::find($id);
        $data->update($request->all());
        $data->save();
        return response()->json([
            'message' => 'success',
            'data' => $data,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\Models\OfferResponse::find($id);
        $data->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
