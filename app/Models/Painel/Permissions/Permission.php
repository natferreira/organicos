<?php

namespace App\Models\Painel\Permissions;

use App\Events\UpdatePermission;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'label'
    ];
    //------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------
    public function UpdatePermission($request)
    {
        $permission =  $this->find($request->id);
        $permission->name = $request['name'];
        $permission->label = $request['label'];
        $permission->save();
        if($permission)
        {
            event(new UpdatePermission($permission, $request['roles_id']));
            return true;
        }
        return false;
    }
    //------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Painel\Roles\Role::class);
    }
}
