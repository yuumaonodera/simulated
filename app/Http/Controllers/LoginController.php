<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $item = Login::all();
        $param = ['item' => $item];
        return view('/login', $param);
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Login::create($form);
        return redirect('/login');
    }
    public function checkUser(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $check = $request->check;
        return view('/login');
    }
}
