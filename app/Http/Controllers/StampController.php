<?php

namespace App\Http\Controllers;

use App\Models\Attendaces;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $user = Auth::user();
        /**打刻は一日一回にしたい */
        $oldDatestamp = Datestamp::where('user_id', $user->id)->latest()->first();
        if($oldDatestamp) {
            $oldDatestampPunchIn = new Carbon($oldDatestamp->punchIn);
            $oldDatestampDay = $oldDatestampPunchIn->startday();
        }
        $newDatestampDay = Carbon::today();
        if(( $oldDatestampDay == $newDatestampDay) && (empty($oldDatestamp->punchOut))) {
            return redirect()->back()->with('error', 'すでに出勤打刻がされています');
        }
        $timestamp = Datestamp::create([
            'user_id' => $user->id,
            'punchIn' => Carbon::now(),
        ]);
        return redirect()->back()->with('my_status', '出勤打刻が完了しました');
    }
    public function punchOut()
    {
        $user = Auth::user();
        $timestamp = Datestamp::where('user_id', $user->id)->latest()->first();
        if( !empty($timestamp->punchOut)) {
            return redirect()->back()->width('error', '既に打刻されているか、出勤打刻されてません');
        }
        $timestamp->update([
            'punchOut' => Carbon::now()
        ]);
        return redirect()->back()->with('my_status', '退勤打刻が完了しました');
    }
}
