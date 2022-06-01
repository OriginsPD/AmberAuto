<?php

namespace App\Actions;

use App\Http\Requests\CreateUser;
use App\Models\User;
use Illuminate\Http\Request;

class CreateUserAction
{
    public function execute(CreateUser $request): void
    {
        User::create($request->validated());

    }
}
