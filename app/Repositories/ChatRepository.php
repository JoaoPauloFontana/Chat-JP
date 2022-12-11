<?php

namespace App\Repositories;

use App\Http\Resources\ChatResource;
use App\Models\Message;

class ChatRepository
{
    public function storeMessage(array $data, object $user): object
    {
        $message = $user->messages()->create($data);

        return new ChatResource($message);
    }
}
