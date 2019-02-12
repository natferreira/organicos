<?php

namespace App\Events;

use App\Models\Painel\Permissions\Permission;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UpdatePermission
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    //------------------------------------------------------------------------------------------------------------------
    public $permission;
    public $roles_id;
    //------------------------------------------------------------------------------------------------------------------
    public function __construct(Permission $permission, $roles_id)
    {
        $this->permission = $permission;
        $this->roles_id = $roles_id;
    }
    //------------------------------------------------------------------------------------------------------------------
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
