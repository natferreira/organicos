<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//ROTAS EXTERNAS CESTA
$this->get('produtosCesta/', 'ProdutosCestaController@index');
//ROTAS INTERNAS CESTA
$this->get('add-cesta/{id}', 'Site\CestaController@add')->name('add.cesta');
$this->get('remove-cesta/{id}', 'Site\CestaController@remove')->name('remove.cesta');
$this->get('remove-produto/{id}', 'Site\CestaController@removeProduto')->name('remove.produto');
$this->get('limpar-cesta', 'Site\CestaSiteController@limpar')->name('limpar.cesta');


//ROTAS EXTERNAS SITE
Route::group(['namespace'=>'Site'], function () {
    $this->get('/', 'SiteController@index')->name('Site.Principal.index');
    $this->get('/nossosprodutos', 'ProdutosSiteController@index')->name('Site.Produtos.index');
    $this->get('/nossosprodutos/{categoria}', 'ProdutosSiteController@filtroCategoria')->name('Site.Produtos.filtroCategoria');
    $this->get('/suacesta', 'CestaSiteController@index')->name('Site.Cesta.index');    
    $this->get('/suacesta/frete', 'EncomendaSiteController@frete')->name('Site.Encomenda.Frete.index');
    $this->get('/suacesta/pagamento', 'EncomendaSiteController@pagamento')->name('Site.Encomenda.Pagamento.index');
    $this->get('/suacesta/revisao', 'EncomendaSiteController@revisao')->name('Site.Encomenda.Revisao.index');
    $this->get('/suacesta/conclusao', 'EncomendaSiteController@conclusao')->name('Site.Encomenda.Conclusao.index');
    $this->get('/pesquisa', 'SiteController@pesquisa')->name('resultado.pesquisa');
});


//ROTAS AUTENTICAÇÃO
Auth::routes();
    Route::get('/logout', 'Site\SiteController@logout')->name('logout');
    Route::post('/register', 'Auth\RegisterController@create')->name('register');


//ROTAS PAINEL
Route::group(['namespace'=>'Painel'], function (){
    $this->get('/Painel', 'PainelController@index')->name('Painel.Principal.index');
});

/*
 * ROTAS DE CRUD:
 * .create, .store, .edit, .update, .show, .destroy
 */
Route::resource('produtosCesta','ProdutosCestaController');
Route::resource('endereco', 'Site\EnderecoController');
Route::resource('produtosPainel', 'Painel\ProdutosPainelController');
Route::resource('categorias', 'Painel\CategoriaController');
Route::resource('usuarios', 'Painel\UsuariosController');
Route::resource('perfil', 'Site\PerfilSiteController');
Route::resource('meusPedidos', 'Site\PedidosSiteController');
Route::resource('bairros', 'Painel\BairroController');
Route::resource('cidades', 'Painel\CidadeController');


