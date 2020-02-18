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
Route::get('/', function () {
    return view('welcome');
});

// a opcao ? junto com id impede que seja obrigatório ter uma id no caminho
Route::get('/contato/{id?}', function ($id = null) {
    return "contatos ";
});

Route::post('/contato', function () {
    // o dd serve para visualizar os dados de um objeto
    dd($_POST);
    return "contato pelo POST";
});

Route::put('/contato', function () {
    // método put   , atualizar dados 
    // dd($_POST);
    return "contato pelo PUT";
});

