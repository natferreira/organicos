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

Route::group(['namespace'=>'Home'], function () {
    $this->get('/Repositorio', function (){
        return view('Repositorio.Principal.index');
    })->name('Repositorio.Principal.index'); // View para instalação do repositório!!
    $this->get('/', 'HomeController@index')->name('Home.Principal.index');
});

Auth::routes();

Route::group(['namespace'=>'Painel'], function (){
    $this->get('/Painel', 'PainelController@index')->name('Painel.Principal.index');
});
