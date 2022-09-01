<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Breaktimes;
use App\Models\Attendances;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DateController extends Controller
{
    public function index()
    {
        $user_name = User::all();
        $item = Attendances::all();
        $today = Carbon::today();
        $rests = Breaktimes::all();
        /*$restin = Breaktimes::start_time();
        $restend = Breaktimes::end_time();
        $totalrest = $restend - $restin;*/
        
        return view('/date', ['user_name' => $user_name ,'item' => $item, 'rests' => $rests]);
    }
    public function create()
    {
        return redirect('/date');
    }
}