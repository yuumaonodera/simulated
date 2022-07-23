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
        dd($item);
        return view('/login', $param);
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Login::create($form);
        dd($form);
        return redirect('/login');
    }
    public function checkUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        dd($email,$password);
        return view('login');
    }
}
