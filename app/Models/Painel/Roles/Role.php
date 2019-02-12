<?php

namespace App\Models\Painel\Roles;

use App\Events\DeleteRole;
use App\Events\RegisterRole;
use App\Events\UpdateRole;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'label'
    ];
    //------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------
    public function CreateItem($request)
    {
        //Mudar************************************
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'label' => ['required'],
        ]);
        $item =  $this->create([
            'name' => $request['name'],
            'label' => $request['label'],
        ]);
        if($item)
        {
            event(new RegisterRole($item, $request['permissions_id']));
            return true;
        }
        return false;
    }
    //------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------
    public function UpdateItem($request)
    {
        //Mudar************************************
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:191'],
            'label' => ['required'],
        ]);
        $item =  $this->find($request->item_id);
        $item->name = $request['name'];
        $item->label = $request['label'];
        $item->save();
        if($item)
        {
            event(new UpdateRole($item, $request['permissions_id']));
            return true;
        }
        return false;
    }
    //------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------
    public function DeleteItem($id)
    {
        $item =  $this->destroy($id);
        if($item)
        {
            event(new DeleteRole());
            return true;
        }
        return false;
    }
    //------------------------------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------------------------------


    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Painel\Permissions\Permission::class);
    }
}
