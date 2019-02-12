<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UpdateUser
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    //------------------------------------------------------------------------------------------------------------------
    public $user;
    public $role_id;
    //------------------------------------------------------------------------------------------------------------------
    public function __construct(User $user, $role_id)
    {
        $this->user = $user;
        $this->role_id = $role_id;
    }
    //------------------------------------------------------------------------------------------------------------------
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
