<?php

namespace App\Listeners;

use App\Events\RegisterUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncRoleRegisterUser
{
    //------------------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        //
    }
    //------------------------------------------------------------------------------------------------------------------
    public function handle(RegisterUser $event)
    {
        $funcao = $event->user->roles()->sync([$event->role_id]);
    }
    //------------------------------------------------------------------------------------------------------------------
}
