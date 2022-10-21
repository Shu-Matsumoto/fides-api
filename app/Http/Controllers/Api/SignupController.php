<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function signup(Request $request)
    {
        $user = new \App\Models\ActorUser();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return response()->json($user);
    }

    public function signin(Request $request)
    {
        // 指定された"login_id"を持つアカウント取得
        $systemAcount = \App\Models\System_acount::where('login_id', $request->input('login_id'))->get();

        if ($systemAcount->count() == 1) {
            if ($systemAcount[0]->type == 1) {
                // 女優アカウント
                $actor = \App\Models\ActorUser::where('email', $request->input('email'))->get();
                if ($actor->count() == 1) {
                    if (Hash::check($request->input('password'), $actor[0]->password)) {
                        return response()->json([
                            'message' => 'success',
                            'data' => [
                                'id' => $actor[0]->id,
                                'type' => $systemAcount[0]->type,
                                'user_name' => $actor[0]->user_name,
                                'profile_image_path' => $actor[0]->image_path,
                            ],
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => 'signin failed.',
                            'data' => array()
                        ], 400);
                    }
                } else {
                    return response()->json([
                        'message' => 'signin failed.',
                        'data' => array()
                    ], 400);
                }
            } else if ($systemAcount[0]->type == 2) {
                // メーカーアカウント
                $maker = \App\Models\MakerUser::where('email', $request->input('email'))->get();
                if ($maker->count() == 1) {
                    if (Hash::check($request->input('password'), $maker[0]->password)) {
                        return response()->json([
                            'message' => 'success',
                            'data' => [
                                'id' => $maker[0]->id,
                                'type' => $systemAcount[0]->type,
                                'user_name' => $maker[0]->maker_name,
                                'profile_image_path' => $maker[0]->image_path,
                            ],
                        ], 200);
                    } else {
                        return response()->json([
                            'message' => 'signin failed.',
                            'data' => array()
                        ], 400);
                    }
                } else {
                    return response()->json([
                        'message' => 'signin failed.',
                        'data' => array()
                    ], 400);
                }
            }
        }

        // サインイン失敗
        return response()->json([
            'message' => 'signin failed.',
            'data' => array()
        ], 400);
    }
}
