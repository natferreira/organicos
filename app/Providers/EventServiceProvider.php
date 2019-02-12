<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\RegisterUser' => [
            'App\Listeners\SyncRoleRegisterUser',
        ],
        'App\Events\UpdateUser' => [
            'App\Listeners\SyncRoleUpdateUser',
        ],
        'App\Events\DeleteUser' => [
            'App\Listeners\ClearCacheDeleteUser',
        ],
        'App\Events\RegisterRole' => [
            'App\Listeners\SyncPermissionsRegisterRole',
        ],
        'App\Events\UpdateRole' => [
            'App\Listeners\SyncPermissionsUpdateRole',
        ],
        'App\Events\DeleteRole' => [
            'App\Listeners\SyncPermissionsDeleteRole',
        ],
        'App\Events\UpdatePermission' => [
            'App\Listeners\SyncRolesUpdatePermission',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
