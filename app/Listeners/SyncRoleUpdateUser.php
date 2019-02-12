<?php

namespace App\Listeners;

use App\Events\UpdateUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncRoleUpdateUser
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        //
    }
    //------------------------------------------------------------------------------------------------------------------
    public function handle(UpdateUser $event)
    {
        $funcao = $event->user->roles()->sync([$event->role_id]);
    }
    //------------------------------------------------------------------------------------------------------------------
}
