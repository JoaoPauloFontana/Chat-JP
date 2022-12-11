<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserApiController extends Controller
{

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request): object
    {
        $response = $this->userService->getUsers();

        if ($response['success']) {
            return new JsonResponse($response);
        }

        return new JsonResponse('Ocorreu um erro!');
    }
}
