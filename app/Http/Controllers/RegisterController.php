<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/register');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        return redirect('/register');
    }
}
