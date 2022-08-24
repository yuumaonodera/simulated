<?php

namespace App\Http\Controllers;

use App\Models\Breaktime;
use App\Models\Attendances;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DateController extends Controller
{
    public function index()
    {
        $item = Attendances::all();
        $today = Carbon::today();
        $rest = Breaktime::all();
        return view('/date', ['item' => $item, 'rest' => $rest]);
    }
    public function create()
    {
        return redirect('/date');
    }
}
