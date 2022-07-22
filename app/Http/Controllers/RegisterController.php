<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $item = Register::all();
        return view('/register');
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Register::create($form);
        return redirect('/register');
    }
}
