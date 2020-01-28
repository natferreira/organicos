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
        $this->call('CategoriasTableSeeder');
        $this->call('ProdutosTableSeeder');
        $this->call('EstadosTableSeeder');
        $this->call('CidadesTableSeeder');
        $this->call('BairrosTableSeeder');
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

        $userAdmin = \App\User::create([
            'name'=>'Administrador',
            'email'=>'admin@shieldforce',
            'password'=>bcrypt('admin'),
        ]);

        $user = \App\User::create([
            'name'=>'Natália',
            'email'=>'natalia@somosorganicos',
            'password'=>bcrypt('natalia'),
        ]);

        $user = \App\User::create([
            'name'=>'Ana',
            'email'=>'ana@somosorganicos',
            'password'=>bcrypt('ana'),
        ]);

        $user = \App\User::create([
            'name'=>'Júlia',
            'email'=>'julia@somosorganicos',
            'password'=>bcrypt('julia'),
        ]);

        event(new RegisterUser($userAdmin, 1));
        //------------------------------------------------------
    }

}

class CategoriasTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('categorias')->delete();

        $categoria = \App\Models\Categoria::create([
            'nome' => 'Frutas'
        ]);
        $categoria = \App\Models\Categoria::create([
            'nome' => 'Legumes'
        ]);
    }
}

class ProdutosTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('produtos')->delete();

        $produto = \App\Models\Produto::create([
            'nome'=>'Laranja Lima',
            'descricao'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'preco'=> 10.90,
            'imagem'=>'01',
            'quantidade'=>20,
            'categoria_id' => 1,
        ]);

        $produto = \App\Models\Produto::create([
            'nome'=>'Banana Prata',
            'descricao'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'preco'=> 12.90,
            'imagem'=>'05',
            'quantidade'=>30,
            'categoria_id' => 1,
        ]);

        $produto = \App\Models\Produto::create([
            'nome'=>'Morango',
            'descricao'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'preco'=> 15.90,
            'imagem'=>'07',
            'quantidade'=>30,
            'categoria_id' => 2,
        ]);

        $produto = \App\Models\Produto::create([
            'nome'=>'Cenoura',
            'descricao'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'preco'=> 16.90,
            'imagem'=>'08',
            'quantidade'=>30,
            'categoria_id' => 2,
        ]);
    }
}

class EstadosTableSeeder extends Seeder {

    public function run()
    {
        DB::table('estados')->delete();

        $estado = \App\Models\Estado::create([
            'nome' => 'Rio de Janeiro',
            'sigla' => 'RJ'
        ]);
    }
}

class CidadesTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('cidades')->delete();

        $cidade = \App\Models\Cidade::create([
            'nome' => 'Duque de Caxias'
        ]);

        $cidade = \App\Models\Cidade::create([
            'nome' => 'Rio de Janeiro'
        ]);
    }
}

class BairrosTableSeeder extends Seeder {
    
    public function run()
    {
        DB::table('bairros')->delete();

        $bairro = \App\Models\Bairro::create([
            'nome' => 'Vila São Luiz'
        ]);
        $bairro = \App\Models\Bairro::create([
            'nome' => 'Jardim 25 de agosto'
        ]);
        $bairro = \App\Models\Bairro::create([
            'nome' => 'Itatiaia'
        ]);
    }
}