<?php

namespace App;

use App\Models\Painel\Permissions\Permission;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public $rules = [
        'name'                  => 'max:100',
        'email'                 => 'email|unique:users',
    ];

    public function roles()
    {
        return $this->belongsToMany(\App\Models\Painel\Roles\Role::class);
    }

    public function hasPermission(Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
        if(is_array($roles) || is_object($roles))
        {
            return !! $roles->intersect($this->roles)->count();
        }
        return $this->roles->contains('name', $roles);
    }

    public function endereco(){
        return $this->hasOne(\App\Models\Endereco::class);
    }

    public function pedidos(){
        return $this->hasMany(\App\Models\Pedido::class);
    }
}
