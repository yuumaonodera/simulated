<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $item = Login::all();
        $user = Login::user();
        $param = ['item' => $item, 'user' => $user];
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
        $email = $request->email;
        $password = $request->password;
        if(Login::attempt(['email' => $email, 'password' => $password])) {
            $text = Login::user()->name. 'さんお疲れ様です';
        } else {
            $text = 'ログインに失敗しました';
        }
        return view('login', ['text'=>$text]);
    }
}
