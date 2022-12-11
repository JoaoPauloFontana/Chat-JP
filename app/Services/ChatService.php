<?php

namespace App\Services;

use App\Repositories\ChatRepository;
use Exception;

class ChatService
{
    public function __construct(ChatRepository $chatRepository)
    {
        $this->chatRepository = $chatRepository;
    }

    public function storeMessage(array $data, object $user): array
    {
        try {
            $message = $this->chatRepository->storeMessage($data, $user);

            return [
                'success'  => true,
                'data' => [
                    'user' => $message
                ]
            ];
        } catch (Exception $e) {
            return [
                'success'  => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
