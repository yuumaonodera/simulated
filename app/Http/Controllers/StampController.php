<?php

namespace App\Http\Controllers;

use App\Models\Attendaces;
use Illuminate\Http\Request;

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
}
