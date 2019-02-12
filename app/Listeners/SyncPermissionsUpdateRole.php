<?php

namespace App\Listeners;

use App\Events\UpdateRole;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncPermissionsUpdateRole
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        //
    }
    //------------------------------------------------------------------------------------------------------------------
    public function handle(UpdateRole $event)
    {
        $funcao = $event->role->permissions()->sync($event->permissions_id);
    }
    //------------------------------------------------------------------------------------------------------------------
}
