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
        $userId = $request->user()->id;

        $response = $this->userService->getUsers($userId);

        if ($response['success']) {
            return new JsonResponse($response);
        }

        return new JsonResponse('Error!');
    }
}
