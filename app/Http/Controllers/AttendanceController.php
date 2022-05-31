<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; //現在時刻取得
use App\Models\stamps;

class AttendanceController extends Controller
{
    //
        public function index()
    {

        return view('stamp');
    }

            public function startAttendance()
    {
    $dt = new Carbon();//現在の日付時刻をとる
    $date = $dt->toDateString();//現在の日付を文字列にしている
    $time = $dt->toTimeString();//時間を文字列にしている

    stamps::create([
        'user_id' => 1,
        'work_date' => $date,
        'work_start_time' => $time,
                'work_end_time' => $time,
    ]);
    return view('stamp');
    }





public function endAttendance(Request $request)
    {
        $form = $request->all();
    $dt = new Carbon();//現在の日付時刻をとる
    $date = $dt->toDateString();//現在の日付を文字列にしている
    $time = $dt->toTimeString();//時間を文字列にしている

    stamps::where('id', $request->id)->where('work_date')->update($form);

    return view('stamp');
    }
}
