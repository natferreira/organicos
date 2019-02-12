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
            'name'=>'View-Painel-Administrativo',
            'label'=>'Pode entrar no painel de Administração!',
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
        //----------------------------------------------------------------------------Metas
        $permission4a = Permission::create([
            'name'=>'View-Metas',
            'label'=>'Pode Visualizar Metas!',
            'grupo'=>2,
        ]);
        $permission4b = Permission::create([
            'name'=>'Store-Metas',
            'label'=>'Pode Criar Metas!',
            'grupo'=>2,
        ]);
        $permission4c = Permission::create([
            'name'=>'Update-Metas',
            'label'=>'Pode Editar Metas!',
            'grupo'=>2,
        ]);
        $permission4d = Permission::create([
            'name'=>'Destroy-Metas',
            'label'=>'Pode Deletar Metas!',
            'grupo'=>2,
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
            'email'=>env('MAIL_USERNAME'),
            'password'=>bcrypt('administrador'),
        ]);

        event(new RegisterUser($user, 1));

        //------------------------------------------------------
    }

}

class EstadoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('estado')->delete();

        // Note: these dump files must be generated with DELETE (or TRUNCATE) + INSERT statements
        $sql = file_get_contents('public/CorreiosP/EstadosMod.sql');

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }
    }

}

class MunicipioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('municipio')->delete();

        // Note: these dump files must be generated with DELETE (or TRUNCATE) + INSERT statements
        $sql = file_get_contents('public/CorreiosP/MunicipiosMod.sql');

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }
    }

}
class BairroTableSeeder extends Seeder {

    public function run()
    {
        DB::table('bairro')->delete();

        // Note: these dump files must be generated with DELETE (or TRUNCATE) + INSERT statements
        $sql = file_get_contents('public/CorreiosP/BairrosMod.sql');

        // split the statements, so DB::statement can execute them.
        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }
    }

}