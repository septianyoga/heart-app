<?php

namespace App\Events;

use App\Models\Chat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class SendUserMessage implements ShouldBroadcast
{
    use SerializesModels;

    public $message;
    public $sender_id;
    public $receiver_id;

    public function __construct($message, $sender_id, $receiver_id)
    {
        $this->message = $message;
        $this->sender_id = $sender_id;
        $this->receiver_id = $receiver_id;
    }

    public function broadcastOn()
    {
        // Broadcast ke channel user-chat
        return new Channel('user-chat');
    }
    public function broadcastAs()
    {
        return 'SendUserMessage'; // Nama event broadcasting
    }
}


