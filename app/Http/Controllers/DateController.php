<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Breaktimes;
use App\Models\Attendances;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DateController extends Controller
{
    public function index(Request $request)
    {
        $user_name = User::all();
        $item = Attendances::all();
        $today = Carbon::today();
        $rests = Breaktimes::all();
        $date = $request->input("date")?: Carbon::today()->format("Y-m-d");
        $attendances = Attendances::whereDate('date', $date)->paginate(5);
        foreach ($attendances as $attendance) {
            $total_rest_time = 0;
            foreach ($rests as $rest) {
                $total_rest_time = $total_rest_time + strtotime($rest->end_time) - strtotime($rest->start_time); 
            }

            $rest_hour = floor($total_rest_time / 3600);
            $rest_minute = floor(($total_rest_time / 60) % 60);
            $rest_seconds = floor($total_rest_time % 60);
            $attendance->rest_time = sprintf('%02d:%02d:%02d', $rest_hour, $rest_minute, $rest_seconds);

            $restraint_time = strtotime($attendance->attendance_out) - strtotime($attendance->attendance_in);
            $total_work_time = $restraint_time - $total_rest_time;

            $work_hour = floor($total_work_time / 3600);
            $work_minute = floor(($total_work_time / 60) % 60);
            $work_second = floor($total_work_time % 60);
            $attendance->work_time = sprintf('%02d:%02d:%02d', $work_hour, $work_minute, $work_second);
        }
        
        
        return view('/date', ['user_name' => $user_name ,'item' => $item, 'rests' => $rests, 'total_rest_time' => $total_rest_time]);
    }
    public function create()
    {
        return redirect('/date');
    }
}