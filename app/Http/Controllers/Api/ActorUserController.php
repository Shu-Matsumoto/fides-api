<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PlayCondition;
use App\Models\ActorUser;

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

    //プレイ条件検索、日程検索
    public function condition_search(Request $request)
    {

            // return response()->json([
            //                 'message' => 'success',
            //                 'data' => $request->input("end_time"),
            //             ], 200);


            $data = \App\Models\play_condition::where('honban', 'like', $request->input("honban") == 1 ? 1 : '%')
            ->where('gomunashi', 'like', $request->input("gomunashi") == 1 ? 1 : '%')
            ->where('nakadashi', 'like', $request->input("nakadashi") == 1 ? 1 : '%')
            ->where('ferachio', 'like', $request->input("ferachio") == 1 ? 1 : '%')
            ->where('iramachio', 'like', $request->input("iramachio") == 1 ? 1 : '%')
            ->where('kounaihassha', 'like', $request->input("kounaihassha") == 1 ? 1 : '%')
            ->where('gansha', 'like', $request->input("gansha") == 1 ? 1 : '%')
            ->where('gokkun', 'like', $request->input("gokkun") == 1 ? 1 : '%')
            ->where('bukkake', 'like', $request->input("bukkake") == 1 ? 1 : '%')
            ->where('anal', 'like', $request->input("anal") == 1 ? 1 : '%')
            ->where('anal_finger', 'like', $request->input("anal_finger") == 1 ? 1 : '%')
            ->where('anal_toy', 'like', $request->input("anal_toy") == 1 ? 1 : '%')
            ->where('anal_dankon', 'like', $request->input("anal_dankon") == 1 ? 1 : '%')
            ->where('toys', 'like', $request->input("toys") == 1 ? 1 : '%')
            ->where('rotar', 'like', $request->input("rotar") == 1 ? 1 : '%')
            ->where('denma', 'like', $request->input("denma") == 1 ? 1 : '%')
            ->where('vibe', 'like', $request->input("vibe") == 1 ? 1 : '%')
            ->where('machine_vibe', 'like', $request->input("machine_vibe") == 1 ? 1 : '%')
            ->where('chizyo', 'like', $request->input("chizyo") == 1 ? 1 : '%')
            ->where('roshutsu', 'like', $request->input("roshutsu") == 1 ? 1 : '%')
            ->where('gaihakuroke', 'like', $request->input("gaihakuroke") == 1 ? 1 : '%')
            ->where('gaikokujin', 'like', $request->input("gaikokujin") == 1 ? 1 : '%')
            ->where('les_tachi', 'like', $request->input("les_tachi") == 1 ? 1 : '%')
            ->where('les_neko', 'like', $request->input("les_neko") == 1 ? 1 : '%')
            ->where('multiplay', 'like', $request->input("multiplay") == 1 ? 1 : '%')
            ->where('onani', 'like', $request->input("onani") == 1 ? 1 : '%')
            ->where('teimou', 'like', $request->input("teimou") == 1 ? 1 : '%')
            ->where('hounyou', 'like', $request->input("hounyou") == 1 ? 1 : '%')
            ->where('innyou', 'like', $request->input("innyou") == 1 ? 1 : '%')
            ->where('yokunyou', 'like', $request->input("yokunyou") == 1 ? 1 : '%')
            ->where('giji_innyou', 'like', $request->input("giji_innyou") == 1 ? 1 : '%')
            ->where('rape', 'like', $request->input("rape") == 1 ? 1 : '%')
            ->where('rape_head', 'like', $request->input("rape_head") == 1 ? 1 : '%')
            ->where('sm', 'like', $request->input("sm") == 1 ? 1 : '%')
            ->where('spamking', 'like', $request->input("spamking") == 1 ? 1 : '%')
            ->where('bara_muchi', 'like', $request->input("bara_muchi") == 1 ? 1 : '%')
            ->where('ippon_muchi', 'like', $request->input("ippon_muchi") == 1 ? 1 : '%')
            ->where('rousoku', 'like', $request->input("rousoku") == 1 ? 1 : '%')
            ->where('kinbaku', 'like', $request->input("kinbaku") == 1 ? 1 : '%')
            ->where('hanahukku', 'like', $request->input("hanahukku") == 1 ? 1 : '%')
            ->where('kanchou', 'like', $request->input("kanchou") == 1 ? 1 : '%')
            ->where('binta', 'like', $request->input("binta") == 1 ? 1 : '%')
            ->where('kubisime', 'like', $request->input("kubisime") == 1 ? 1 : '%')
            ->where('fist', 'like', $request->input("fist") == 1 ? 1 : '%')
            ->where('dance', 'like', $request->input("dance") == 1 ? 1 : '%')
            ->join('actor_schedules','play_conditions.user_id','=','actor_schedules.actor_user_id')
            ->where('start_time','<',$request->input("start_time"))
            ->where('end_time','>',$request->input("end_time"))
            ->get();


            return response()->json([
                'message' => 'success',
                'data' => $data,
            ], 200);



    }

    //名前検索機能
    public function name_search(Request $request)
    {


        $user_name = $request->input("user_name");


        $data = ActorUser::where('user_name', 'like', "%$user_name%")
        ->get();

        return response()->json([
            'message' => 'success',
            'data' => $data,
        ], 200);



    }
}
