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
        $rest = Breaktimes::all();
        return view('/date', ['user_name' => $user_name ,'item' => $item, 'rest' => $rest]);
    }
    public function create()
    {
        return redirect('/date');
    }
}
