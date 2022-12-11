<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use App\Models\User;

class UserRepository
{
    public function getUsers(int $UserId): object
    {
        $user = User::inRandomOrder()
                    ->where('id', '!=', $UserId)
                    ->get();

        return UserResource::collection($user);
    }
}
