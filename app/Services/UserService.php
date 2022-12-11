<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;

class UserService
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUsers(): array
    {
        try {
            $users = $this->userRepository->getUsers();

            return [
                'success'  => true,
                'users' => $users
            ];
        } catch (Exception $e) {
            return [
                'success'  => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
