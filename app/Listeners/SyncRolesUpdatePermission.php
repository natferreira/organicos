<?php

namespace App\Listeners;

use App\Events\UpdatePermission;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncRolesUpdatePermission
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        //
    }
    //------------------------------------------------------------------------------------------------------------------
    public function handle(UpdatePermission $event)
    {
        $funcao = $event->permission->roles()->sync($event->roles_id);
    }
    //------------------------------------------------------------------------------------------------------------------
}
