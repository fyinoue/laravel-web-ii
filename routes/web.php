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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola/{nome?}', function($nome = 'Mundo') {
    return 'Olá $nome';
});

Route::group(['prefix' => 'aluno'], function() {
    Route::get('listar', 'AlunoController@listar');
    Route::get('criar', 'AlunoController@criar');
    Route::get('{id}/editar', 'AlunoController@editar');
    Route::get('{id}/remover', 'AlunoController@remover');
    Route::post('salvar', 'AlunoController@salvar');
});