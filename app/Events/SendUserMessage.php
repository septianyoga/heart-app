<?php

namespace App\Events;

use App\Models\Chat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class SendUserMessage implements ShouldBroadcast
{
    use SerializesModels;

    public $chat;

    // Constructor to initialize the message
    public function __construct(Chat $chat)
    {
        $this->chat = $chat;
    }

    // The channel the event should broadcast on
    public function broadcastOn()
    {
        return new Channel(name: 'user-chat');
    }

    // The name of the event in the frontend
    public function broadcastAs()
    {
        return 'SendUserMessage';
    }
}


