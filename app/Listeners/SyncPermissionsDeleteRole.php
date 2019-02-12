<?php

namespace App\Listeners;

use App\Events\DeleteRole;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncPermissionsDeleteRole
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DeleteRole  $event
     * @return void
     */
    public function handle(DeleteRole $event)
    {
        //
    }
}
