<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = \App\Models\UserNotice::all();
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
        $data = \App\Models\UserNotice::create($request->all());
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
        $data = \App\Models\UserNotice::find($id);
        return response()->json([
            'message' => 'success',
            'data' => $data
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
        \App\Models\UserNotice::where('id', $id)
            ->update(
                [
                    'already_read' => $request->input('already_read'),
                ]
            );
        $data = \App\Models\UserNotice::find($id);
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
        $data = \App\Models\UserNotice::find($id);
        $data->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function actorUserList(Request $request, int $userId)
    {
        $datas = \App\Models\UserNotice::where('actor_user_id', $userId)->where('user_type', 1)->get();
        return response()->json([
            'message' => 'success',
            'data' => $datas,
        ], 200);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function makerUserList(Request $request, int $userId)
    {
        $datas = \App\Models\UserNotice::where('maker_user_id', $userId)->where('user_type', 2)->get();
        return response()->json([
            'message' => 'success',
            'data' => $datas,
        ], 200);
    }
}
