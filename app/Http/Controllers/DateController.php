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
        return view('/date');
    }
    public function create()
    {
        return redirect('/stamp');
    }
}
