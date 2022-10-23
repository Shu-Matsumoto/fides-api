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

    public function name_seach(Request $request)
    {

    if (!empty($request)) {
        //検索キーワードのnameをnameとする場合
        $name = $request;
        $user_name = ActorUser::where('user_name','like' ,"%$name%")
        ->save();
        return response()->json([
            'message' => 'success',
            'user_name' => $user_name,
        ], 200);


    }
    }
}
