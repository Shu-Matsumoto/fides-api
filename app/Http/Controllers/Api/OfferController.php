<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = \App\Models\Offer::all();
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
        $data = \App\Models\Offer::create($request->all());
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
        $data = \App\Models\Offer::find($id);
        return response()->json([
            'message' => 'success',
            'data' => $data,
        ], 200);
    }

    /**
     * Display the specified resource.(detail ver.)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdetail($id)
    {
        // // 講師情報にユーザー情報の付加
        // $teacherwithusers = [];
        // $teachers = \App\Models\lecture::find($id)->teachers;
        // foreach ($teachers as $teacher) {
        //     $obj = [
        //         'teacher' => \App\Models\teacher::find($teacher->id),
        //         'user' => $teacher->user
        //     ];
        //     array_push($teacherwithusers, $obj);
        // }
        // // 生徒情報にユーザー情報の付加
        // $studentwithusers = [];
        // $students = \App\Models\lecture::find($id)->students;
        // foreach ($students as $student) {
        //     $obj = [
        //         'student' => \App\Models\student::find($student->id),
        //         'user' => $student->user
        //     ];
        //     array_push($studentwithusers, $obj);
        // }

        // return response()->json([
        //     'message' => 'success',
        //     'data' => [
        //         'lecture' => \App\Models\lecture::find($id),
        //         'students' => $studentwithusers,
        //         'teachers' => $teacherwithusers,
        //         'schedules' => \App\Models\lecture::find($id)->lecture_schedules,
        //         'materials' => \App\Models\lecture::find($id)->teaching_materials
        //     ]
        // ], 200);
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
        $data = \App\Models\Offer::find($id);
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
        $data = \App\Models\Offer::find($id);
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
    public function indexByUserId(int $userId)
    {
        // 指定されたIDの女優ユーザーが所有するスケジュール一覧取得
        $offers = [];
        $schedules = \App\Models\ActorSchedule::where('actor_user_id', $userId)->get();
        foreach ($schedules as $schedule) {
            $subOffers = \App\Models\ActorSchedule::find($schedule->id)->offers;
            foreach ($subOffers as $offer) {
                array_push($offers, $offer);
            }
        }

        return response()->json([
            'message' => 'success',
            'data' => $offers
        ], 200);
    }
}
