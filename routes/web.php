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

$this->get('add-cesta/{id}', 'Site\CestaController@add')->name('add.cesta');
$this->get('remove-cesta/{id}', 'Site\CestaController@remove')->name('remove.cesta');
$this->get('remove-produto/{id}', 'Site\CestaController@removeProduto')->name('remove.produto');

Route::group(['namespace'=>'Site'], function () {
    $this->get('/', 'SiteController@index')->name('Site.Principal.index');
    $this->get('/nossosprodutos', 'ProdutosSiteController@index')->name('Site.Produtos.index');
    $this->get('/suacesta', 'CestaSiteController@index')->name('Site.Cesta.index');
    $this->get('/suacesta/endereco', 'EncomendaSiteController@endereco')->name('Site.Encomenda.Endereco.index');
    $this->get('/suacesta/frete', 'EncomendaSiteController@frete')->name('Site.Encomenda.Frete.index');
    $this->get('/suacesta/pagamento', 'EncomendaSiteController@pagamento')->name('Site.Encomenda.Pagamento.index');
    $this->get('/suacesta/revisao', 'EncomendaSiteController@revisao')->name('Site.Encomenda.Revisao.index');
    $this->get('/suacesta/conclusao', 'EncomendaSiteController@conclusao')->name('Site.Encomenda.Conclusao.index');
});

Auth::routes();
    Route::get('/logout', 'Site\SiteController@logout')->name('logout');

Route::group(['namespace'=>'Painel'], function (){
    $this->get('/Painel', 'PainelController@index')->name('Painel.Principal.index');
});
