<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessage;
use App\Models\Message;
use App\Services\ChatService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatApiController extends Controller
{
    public function __construct(Message $message, ChatService $chatService)
    {
        $this->chatService = $chatService;
        $this->message = $message;
    }

    public function storeMessage(StoreMessage $request): object
    {
        $user = $request->user();

        $data = $request->all();

        $response = $this->chatService->storeMessage($data, $user);

        if ($response['success']) {
            return new JsonResponse($response);
        }

        return new JsonResponse('Error!');
    }
}
