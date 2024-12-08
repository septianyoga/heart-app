<?php

namespace App\Events;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class SendAdminMessage implements ShouldBroadcastNow
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
        return new Channel(name: 'admin-chat');
    }

    // The name of the event in the frontend
    public function broadcastAs()
    {
        return 'SendAdminMessage';
    }
}
