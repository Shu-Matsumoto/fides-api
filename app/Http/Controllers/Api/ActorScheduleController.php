<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActorScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = \App\Models\ActorSchedule::all();
        return response()->json([
            'message' => 'success',
            'data' => $users,
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
        $schedule = \App\Models\ActorSchedule::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => $schedule,
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
        $user = \App\Models\ActorSchedule::find($id);
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
        //
        $user = \App\Models\ActorSchedule::find($id);
        $user->update($request->all());
        $user->save();
        return response()->json([
            'message' => 'success',
            'data' => $user,
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
        $data = \App\Models\ActorSchedule::find($id);
        $data->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByUserId(Request $request, int $userId)
    {
        // 指定された女優ユーザーのスケジュール一覧取得
        $schedules = \App\Models\ActorSchedule::where('actor_user_id', $userId)->get();
        return response()->json([
            'message' => 'success',
            'data' => $schedules
        ], 200);
    }
}
