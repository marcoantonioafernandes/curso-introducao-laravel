<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//ROTAS DE TESTE
//Redirecionando para um controler e um método específico após o @
Route::get('/contato/{id?}', ['uses' => 'ContatoController@index']);

Route::post('/contato', ['uses' => 'ContatoController@criar']);

Route::put('/contato', ['uses' => 'ContatoController@editar']);


//ROTAS DO SISTEMA
//Apelidando a rota com admin.cursos
Route::get('/', ['as' => 'site.home', 'uses'=>'Site\HomeController@index']);

//Login
Route::get('/login', ['as' => 'site.login', 'uses'=>'Site\LoginController@index']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
Route::get('/login/sair', ['as' => 'site.login.sair', 'uses'=>'Site\LoginController@sair']);

//Dessa forma o sistema está utilizando o middleware auth para proteger o acesso a determinadas rotas.
//Tudo que está dentro do grupo precisa de autenticação para ser exibido
Route::group(['middleware'=>'auth'], function(){
    Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses'=>'Admin\CursoController@index']);
    Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);
});

/*
Route::get('/contato/{id?}', function ($id = null) {
    // método view -> renderiza uma view do diretório /resources/views/
    return "Contato id = $id";
});

Route::post('/contato', function () {
    //exibe as variáveis do php
    var_dump($_POST);
    // método view -> renderiza uma view do diretório /resources/views/
    return "Contato POST";
});

Route::put('/contato', function () {

    return "Contato PUT";
});
*/
