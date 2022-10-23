<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActorUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = \App\Models\ActorUser::all();
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
        $data = \App\Models\ActorUser::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => $data,
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
        $user = \App\Models\ActorUser::find($id);
        return response()->json([
            'message' => 'success',
            'data' => $user,
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
        $data = \App\Models\ActorUser::find($id);
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
        $data = \App\Models\ActorUser::find($id);
        $data->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function name_search(Request $request)
    {

        if (!empty($request)) {

            $search = play_condition::query()
            ->where('$request->input("honban")','=','1')
            ->orWhere('$request->input("gomunashi")','=','1')
            ->orWhere('$request->input("nakadashi")','=','1')
            ->orWhere('$request->input("ferachio")','=','1')
            ->orWhere('$request->input("iramachio")','=','1')
            ->orWhere('$request->input("kounaihassha")','=','1')
            ->orWhere('$request->input("gansha")','=','1')
            ->orWhere('$request->input("gokkun")','=','1')
            ->orWhere('$request->input("bukkake")','=','1')
            ->orWhere('$request->input("anal")','=','1')
            ->orWhere('$request->input("anal_finger")','=','1')
            ->orWhere('$request->input("anal_toy")','=','1')
            ->orWhere('$request->input("anal_dankon")','=','1')
            ->orWhere('$request->input("toys")','=','1')
            ->orWhere('$request->input("rotar")','=','1')
            ->orWhere('$request->input("denma")','=','1')
            ->orWhere('$request->input("vibe")','=','1')
            ->orWhere('$request->input("machine_vibe")','=','1')
            ->orWhere('$request->input("chizyo")','=','1')
            ->orWhere('$request->input("roshutsu")','=','1')
            ->orwhere('$request->input("gaihakuroke")','=','1')
            ->orwhere('$request->input("gaikokujin")','=','1')
            ->orwhere('$request->input("les_tachi")','=','1')
            ->orwhere('$request->input("les_neko")','=','1')
            ->orwhere('$request->input("multiplay")','=','1')
            ->orwhere('$request->input("onani")','=','1')
            ->orwhere('$request->input("teimou")','=','1')
            ->orwhere('$request->input("hounyou")','=','1')
            ->orwhere('$request->input("innyou")','=','1')
            ->orwhere('$request->input("yokunyou")','=','1')
            ->orwhere('$request->input("giji_innyou")','=','1')
            ->orwhere('$request->input("rape")','=','1')
            ->orwhere('$request->input("rape_head")','=','1')
            ->orwhere('$request->input("sm")','=','1')
            ->orwhere('$request->input("spamking")','=','1')
            ->orwhere('$request->input("bara_muchi")','=','1')
            ->orwhere('$request->input("ippon_muchi")','=','1')
            ->orwhere('$request->input("rousoku")','=','1')
            ->orwhere('$request->input("kinbaku")','=','1')
            ->orwhere('$request->input("hanahukku")','=','1')
            ->orwhere('$request->input("kanchou")','=','1')
            ->orwhere('$request->input("binta")','=','1')
            ->orwhere('$request->input("kubisime")','=','1')
            ->orwhere('$request->input("fist")','=','1')
            ->orwhere('$request->input("dance")','=','1')
            ->save();
        }
        return response()->json([
            'message' => 'success',
            'search' => $search,
        ], 200);



    }

    public function condition_search(Request $request)
    {

    if (!empty($request)) {
        //検索キーワードのnameをnameとする場合
        $user_name = ActorUser::where('user_name', 'like', "%$name%")
        ->save();
    }
        return response()->json([
            'message' => 'success',
            'user_name' => $user_name,
        ], 200);



    }
}
