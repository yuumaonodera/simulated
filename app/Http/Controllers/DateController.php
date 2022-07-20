<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        $item = Date::all();
        return view('/date');
    }
    public function create(Request $request)
    {
        $form = $request::all();
        Date::create($form);
        return redirect('/date');
    }
}
