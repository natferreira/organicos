<?php

namespace App\Listeners;

use App\Events\RegisterRole;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncPermissionsRegisterRole
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        //
    }
    //------------------------------------------------------------------------------------------------------------------
    public function handle(RegisterRole $event)
    {
        $funcao = $event->role->permissions()->sync($event->permissions_id);
    }
    //------------------------------------------------------------------------------------------------------------------
}
