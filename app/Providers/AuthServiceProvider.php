<?php

namespace App\Providers;

use App\Models\Painel\Permissions\Permission;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        \Carbon\Carbon::setLocale('pt_BR');
        $this->registerPolicies($gate);

        try {
            //Recuperando as funções das seguintes permissões
            $permissions = Permission::with('roles')->get();

            //Loop para rodar as permissões
            foreach ($permissions as $permission)
            {
                $gate->define($permission->name, function(User $user) use ($permission)
                {
                    return $user->hasPermission($permission);
                });
            }
        } catch (\Exception $e) {

        }

        $gate->before(function(User $user, $ability){
            if($user->hasAnyRoles('Administrador')){
                return true;
            };
        });
    }
}
