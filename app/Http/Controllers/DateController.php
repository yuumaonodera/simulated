<?php

namespace App\Http\Controllers;

use App\Models\Breaktime;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        return view('/date');
    }
    public function create(Request $request)
    {
        $form = $request::all();
        return redirect('/date');
    }
}
