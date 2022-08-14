<?php

namespace App\Http\Controllers;

use App\Models\Breaktime;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DateController extends Controller
{
    public function index()
    {
        $item = Attendaces::all();
        return view('/date', ['item' => $item]);
    }
    public function create()
    {
        return redirect('/date');
    }
}
