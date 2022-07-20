<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;

class StampController extends Controller
{
    public function index()
    {
        $item = Stamp::all();
        return view('/stamp');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Stamp::create($form);
        return redirect('/stamp');
    }
}
