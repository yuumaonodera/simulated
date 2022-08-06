<?php

namespace App\Http\Controllers;

use App\Models\Attendaces;
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
        return redirect('/stamp');
    }
    public function punchIn()
    {
        $user_id = Auth::id();
        $newAttendanceDay = Carbon::today();
        /*打刻を一日一回*/
        $oldAttendace = Attendaces::where('user_id',$user_id)->latest()->first();
        if( !empty($oldAttendace)) {
            $oldAttendanceDate = $oldAttendance->date;
            $newAttendanceDate = $newAttendance->format('Y-m-d');
            if($oldAttendacenDate == $newAttendanceDate) {
                return back()->with('error', '既に出勤打刻されています');
            }
        }
        Attendance::create([
            'user_id' => $user_id,
            'start_time' => Carbon::now(),
            'date' => $newAttendanceDay
        ]);
        return back()->with('my_status', '出勤打刻が完了しました');
    }
    public function punchOut()
    {
        $user = Auth::user();
        $attendance = Attendance::where('user_id', $user_id)->latest()->first();
        if( empty($attendance) || !empty($attendance->end_time)) {
            return back()->with('error', '既に退勤打刻されているか、出勤打刻されていません');
        }
        $attendance->update([
            'end_time' => Carbon::now()
        ]);
        return back()->with('my_status', '退勤打刻が完了しました');
    }
}
