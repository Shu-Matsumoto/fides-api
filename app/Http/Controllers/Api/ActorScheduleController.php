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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     $student = \App\Models\ActorSchedule::create($request->all());
    //     return response()->json([
    //         'message' => 'success',
    //         'data' => $student,
    //     ], 200);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $student = \App\Models\ActorSchedule::create($request->all());
        return response()->json([
            'message' => 'success',
            'data' => $student,
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
        $user = \App\Models\ActorSchedule::find($id);
        $user->delete();
        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
