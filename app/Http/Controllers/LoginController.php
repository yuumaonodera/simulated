<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $item = Login::all();
        return view('login');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Login::create($form);
        return redirect('/login');
    }
}
