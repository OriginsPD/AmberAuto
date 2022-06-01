<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUser;
use App\Models\User;
use App\Actions\CreateUserAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('Auth.register');
    }

    public function store(CreateUser $request
        , CreateUserAction $createUser): RedirectResponse
    {
        $createUser->execute($request);

        if (Auth::attempt($request->validated())) {
            if (Auth::user()->is_admin === 1) {
                return redirect()->route('Admin.index');
            }

            if (Auth::user()->is_admin === 2) {
                return redirect()->route('Agent.index');
            }
            return redirect()->route('index');
        }

        return back()->with('Failed', 'Please Try Again');
    }
}
