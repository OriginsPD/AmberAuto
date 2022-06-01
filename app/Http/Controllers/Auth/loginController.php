<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function store(CheckUser $request)
    {
        if (Auth::attempt($request->validated())) {
            if (Auth::user()->is_admin === 1) {
                return redirect()->route('Admin.index');
            }

            if (Auth::user()->is_admin === 2) {
                return redirect()->route('Agent.index');
            }
            return view('index');
        }

        return back()->with('Errors','Please Try Again');
    }
}
