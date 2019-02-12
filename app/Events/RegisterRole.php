<?php

namespace App\Events;

use App\Models\Painel\Roles\Role;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RegisterRole
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    //------------------------------------------------------------------------------------------------------------------
    public $role;
    public $permissions_id;
    //------------------------------------------------------------------------------------------------------------------
    public function __construct(Role $role, $permissions_id)
    {
        $this->role = $role;
        $this->permissions_id = $permissions_id;
    }
    //------------------------------------------------------------------------------------------------------------------
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
