<?php

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | This file is where you may define all of the routes that are handled
 * | by your application. Just tell Laravel the URIs it should respond
 * | to using a Closure or controller method. Build something great!
 * |
 */
Route::get('/',['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

// a opcao ? junto com id impede que seja obrigat�rio ter uma id no caminho
// passando um array para encaminhar ao controller m�todo index
Route::get('/contato/{id?}', ['uses' => 'ContatoController@index']);

Route::post('/contato', ['uses' => 'ContatoController@criar']);

Route::put('/contato', ['uses' => 'ContatoController@editar']);


// criado um grupo de rotas que utiliza um middleware que verifica se o usuario vai estar autenticado para acessar
Route::group(['middleware'=>'auth'], function() {

    // usando alias para admin/cursos
    Route::get('/admin/cursos',['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']);
    Route::get('/admin/cursos/adicionar',['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar',['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    // método editar precisa do ID
    Route::get('/admin/cursos/editar/{id}',['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    // método atualizar precisa do ID
    Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    // método deletar precisa do ID
    Route::get('/admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);


 });
