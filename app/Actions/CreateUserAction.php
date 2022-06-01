<?php

namespace App\Actions;

use App\Models\User;

class CreateUser
{
    public function execute(Request $request): void
    {
        User::create($request->validated());
    }
}
