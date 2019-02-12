<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Painel\Roles\Role;
use App\Models\Painel\Permissions\Permission;
use App\Events\RegisterUser;


class DatabaseSeeder extends Seeder
{
    //------------------------------------------------------------------------------------------------------------------
    public function run()
    {
        $this->call('RolesTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('UserTableSeeder');
    }
}
class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $role1 = Role::create([
            'id' => 1,
            'name'=>'Administrador',
            'label'=>'Administrador do Sistema',
        ]);
    }

}

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();

        $permission1a = Permission::create([
            'name'=>'View-Painel',
            'label'=>'Pode entrar no painel!',
            'grupo'=>1,
        ]);
        $permission1b = Permission::create([
            'name'=>'View-Painel-Cliente',
            'label'=>'Pode entrar no painel de Cliente!',
            'grupo'=>2,
        ]);
        //----------------------------------------------------------------------------Usuários
        $permission2a = Permission::create([
            'name'=>'View-Usuarios',
            'label'=>'Pode Visualizar Usuários!',
            'grupo'=>1,
        ]);
        $permission2b = Permission::create([
            'name'=>'Store-Usuarios',
            'label'=>'Pode Criar Usuários!',
            'grupo'=>1,
        ]);
        $permission2c = Permission::create([
            'name'=>'Update-Usuarios',
            'label'=>'Pode Editar Usuários!',
            'grupo'=>1,
        ]);
        $permission2d = Permission::create([
            'name'=>'Destroy-Usuarios',
            'label'=>'Pode Deletar Usuários!',
            'grupo'=>1,
        ]);
        //----------------------------------------------------------------------------Funções
        $permission3a = Permission::create([
            'name'=>'View-Funcoes',
            'label'=>'Pode Visualizar Funções!',
            'grupo'=>1,
        ]);
        $permission3b = Permission::create([
            'name'=>'Store-Funcoes',
            'label'=>'Pode Criar Funções!',
            'grupo'=>1,
        ]);
        $permission3c = Permission::create([
            'name'=>'Update-Funcoes',
            'label'=>'Pode Editar Funções!',
            'grupo'=>1,
        ]);
        $permission3d = Permission::create([
            'name'=>'Destroy-Funcoes',
            'label'=>'Pode Deletar Funções!',
            'grupo'=>1,
        ]);
        //............
        //$syncPermission1 = $permission1b->roles()->sync([2, 3, 4]); //Liberando painel Plano padrão 1
    }
}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = \App\User::create([
            'name'=>'Administrador',
            'email'=>'admin@shieldforce',
            'password'=>bcrypt('admin'),
        ]);

        event(new RegisterUser($user, 1));
        //------------------------------------------------------
    }

}