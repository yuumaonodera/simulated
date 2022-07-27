<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        return redirect('/login');
    }
    public function check(Request $request)
    {
    $text = ['text' => 'ログインして下さい。'];
    return view('auth', $text);
    }
    public function checkUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $is_use = User::attempt(['email'=> $email, 'password' => $password]);
        if ($is_use) {
            $text = User::user()->name. 'さんがログインしました';
        } else {
            $text = 'ログインに失敗しました';
        }
        return view('/login', ['text'=> $text]);
    }
}
