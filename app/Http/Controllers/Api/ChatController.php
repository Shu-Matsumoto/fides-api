<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chat = \App\Models\Chat::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => [
                'chat' => $chat,
                'actor' => \App\Models\ActorUser::find($chat->actor_user_id),
                'maker' => \App\Models\MakerUser::find($chat->maker_user_id),
            ]
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByUserId(Request $request, int $userId)
    {
        // return response()->json([
        //     'message' => 'success',
        //     'data' => ['req' => $request->input('user_type'), 'id' => $userId]
        // ], 200);

        $data = [];

        // リクエストのuser_typeに従い取得するチャットリストを切り替える
        if ($request->input('user_type') == 1) {
            // 女優
            $chats = \App\Models\Chat::where('actor_user_id', $userId)->get();
            $partnerList = $chats->groupBy('maker_user_id');

            // partnerリストで繰り返し処理
            foreach ($partnerList as $partner) {
                $myUser = \App\Models\ActorUser::find($userId);
                $partnerUser = \App\Models\MakerUser::find($partner[0]->maker_user_id);
                $partnerChats =
                    \App\Models\Chat::where('actor_user_id', $userId)
                    ->orWhere('maker_user_id', $partner[0]->maker_user_id)->get();
                $partnerChatsWithUser = [];
                foreach ($partnerChats as $chat) {
                    array_push($partnerChatsWithUser, [
                        'chat' => $chat,
                        'actor' => $myUser,
                        'maker' => $partnerUser,
                    ]);
                }

                // TODO：時刻によるソート

                array_push($data, [
                    'pairName' => $partnerUser->maker_name,
                    'pairImagePath' => $partnerUser->image_path,
                    'chats' => $partnerChatsWithUser,
                ]);
            }
        } else {
            // メーカー
            $chats = \App\Models\Chat::where('maker_user_id', $userId)->get();
            $partnerList = $chats->groupBy('actor_user_id');
            // partnerリストで繰り返し処理
            foreach ($partnerList as $partner) {
                $myUser = \App\Models\MakerUser::find($userId);
                $partnerUser = \App\Models\ActorUser::find($partner[0]->actor_user_id);
                $partnerChats =
                    \App\Models\Chat::where('maker_user_id', $userId)
                    ->orWhere('actor_user_id', $partner[0]->actor_user_id)->get();
                $partnerChatsWithUser = [];
                foreach ($partnerChats as $chat) {
                    array_push($partnerChatsWithUser, [
                        'chat' => $chat,
                        'actor' => $partnerUser,
                        'maker' => $myUser,
                    ]);
                }

                // TODO：時刻によるソート

                array_push($data, [
                    'pairName' => $partnerUser->user_name,
                    'pairImagePath' => $partnerUser->image_path,
                    'chats' => $partnerChatsWithUser,
                ]);
            }
        }

        return response()->json([
            'message' => 'success',
            'data' => $data
        ], 200);
    }
}
