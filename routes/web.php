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

Route::get('/', 'HomeController');
Route::view('/teste', 'teste');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login','Auth\LoginController@auth');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('todo', 'TodoController');
/**
 * get - /todo - index - toto.index - lista os itens
 * get - /todo/create - create - toto.create - form de criacao
 * post - /todo - store - todo.store - receber os dados e add item
 * get -  /todo/{id} - show - todo.show - item individual
 * get - /todo/{id}/edit - edit - todo.edit - form de edição
 * put - /todo/{id} - update - todo.update - receber os dads e update item
 * delete - /todo/{id} - destroy - todo.destroy - deletar o item
 */
Route::prefix('/tarefas')->group(function(){

    Route::get('/', 'TarefasController@list')->name('tarefas.list'); // Listagem de tarefas

    Route::get('add','TarefasController@add')->name('tarefas.add');  // Tela de adição
    Route::post('add','TarefasController@addAction'); // Ação de adição

    Route::get('edit/{id}','TarefasController@edit')->name('tarefas.edit');  //Tela de edição
    Route::post('edit/{id}','TarefasController@editAction'); // Ação de edição

    Route::get('delete/{id}','TarefasController@del')->name('tarefas.del'); // Ação de deletar

    Route::get('marcar/{id}','TarefasController@done')->name('tarefas.done'); // Marcar resolvido
    
});

Route::prefix('/config')->group(function(){

    Route::get('/', 'Admin\ConfigController@index')->name('config.index')->middleware('auth');
    Route::post('/', 'Admin\ConfigController@index');    
    Route::get('info', 'Admin\ConfigController@info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes');
});

Route::fallback(function(){
    return view('404');
});

