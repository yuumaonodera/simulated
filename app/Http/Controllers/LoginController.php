<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('/login', $text);
    }
    public function checkUser(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $text = Auth::user()->name. 'さんがログインした';
            return view('/stamp',['text' => $text]);
        } else {
            $text = 'ログインに失敗しました';
            return view('/login', ['text' => $text]);
        }
    }
}
