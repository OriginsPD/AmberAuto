<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('Auth.register');
    }

    public function store(CreateUser $request)
    {
        User::create($request->validated());

        if (Auth::attempt($request->validated())) {
            if (Auth::user()->is_admin) {
                return view('Admin.index');
            }
            return view('index');
        }

        return back()->with('Failed', 'Please Try Again');
    }
}
