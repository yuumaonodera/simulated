<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\User;
use App\Models\Breaktimes;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class StampController extends Controller
{
    public function index()
    {
        return view('/stamp');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        return redirect('/date');
    }
    public function punchIn()
    {
        $user_id = Auth::id();
        /*$name = User::name();*/
        $newAttendanceDay = Carbon::today();
        /*打刻を一日一回*/
         $oldAttendance = Attendances::where('user_id',$user_id)->latest()->first();
        if( !empty($oldAttendace)) {
            $oldAttendanceDate = $oldAttendance->date;
            $newAttendanceDate = $newAttendance->format('Y-m-d');
            if($oldAttendacenDate == $newAttendanceDate) {
                return back()->with('error', '既に出勤打刻されています');
            }
        }
        Attendances::create([
            'user_id' => $user_id,
            'start_time' => Carbon::now(),
            'date' => $newAttendanceDay
        ]);
        return redirect('/date')->with('my_status', '出勤打刻が完了しました');
    }
    public function punchOut()
    {
        $user_id = Auth::id();
        $attendance = Attendances::where('user_id', $user_id)->latest()->first();
        if( empty($attendance) || !empty($attendance->end_time)) {
            return back()->with('error', '既に退勤打刻されているか、出勤打刻されていません');
        }
        $attendance->update([
            'end_time' => Carbon::now()
        ]);
        return redirect('/')->with('my_status', '退勤打刻が完了しました');
    }
    public function startRest()
    {
        $user_id = Auth::id();

        $dt = new Carbon();
        $date = $dt->toDateString();

        $attendances = Attendances::where('user_id', $user_id)->where('date', $date)->first();

        $attendances_id = $attendances->id;

        $dt = new Carbon();
        $date = $dt->toDateString();
        $start_time = $dt;

        Breaktimes::create([
            'attendances_id' => $attendances_id,
            'start_time' => $start_time,
            'user_id' => $user_id,
        ]);
        return redirect('/')->with('result', '休憩開始');
    }
    public function endRest()
    {
        $user_id = Auth::id();

        $dt = new Carbon();


        $attendances = Attendances::where('user_id', $user_id)->first();

        $breaktimes = Breaktimes::where('user_id', $user_id)->first();

        $rest = $breaktimes->whereNull('end_time')->first();

        Breaktimes::where('id', $rest->id)->update(['end_time' => $dt]);

        return redirect('/')->with('result', '休憩終了');
    }
     public function dateindex(Request $request)
    {
        $date = $request->input("date")?: Carbon::today()->format("Y-m-d");
        $attendances = Attendances::whereDate('date', $date)->paginate(5);
        foreach ($attendances as $attendance) {
            $rests = $attendance->rests;
            $total_rest_time = 0;
            /*foreach ($rests as $rest) {
                $total_rest_time = $total_rest_time + strtotime($rest->rest_out) - strtotime($rest->rest_in); 
            }*/

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
        
        return view('date'); 
    }

}