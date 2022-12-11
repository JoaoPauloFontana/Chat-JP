<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use App\Models\User;

class UserRepository
{
    public function getUsers(): object
    {
        $user = User::all();

        return UserResource::collection($user);
    }
}
