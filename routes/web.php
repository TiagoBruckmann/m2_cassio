<?php

use Illuminate\Support\Facades\Route;

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

//rota para a home do site
Route::get('/', ['as' => 'site.home', 'uses'=> 'App\Http\Controllers\Site\HomeController@index']
    );

//rota para o caminho do projeto incluindo inserção/atualização e delete dos dados
Route::get('/admin/projetos',['as'=>'admin.projetos','uses'=>'App\Http\Controllers\Admin\ProjetosController@index']);
Route::get('/admin/projetos/adicionar',['as'=>'admin.projetos.adicionar','uses'=>'App\Http\Controllers\Admin\ProjetosController@adicionar']);
Route::post('/admin/projetos/salvar',['as'=>'admin.projetos.salvar','uses'=>'App\Http\Controllers\Admin\ProjetosController@salvar']);
Route::get('/admin/projetos/editar/{id}',['as'=>'admin.projetos.editar','uses'=>'App\Http\Controllers\Admin\ProjetosController@editar']);
Route::put('/admin/projetos/atualizar/{id}',['as'=>'admin.projetos.atualizar','uses'=>'App\Http\Controllers\Admin\ProjetosController@atualizar']);
Route::get('/admin/projetos/deletar/{id}',['as'=>'admin.projetos.deletar','uses'=>'App\Http\Controllers\Admin\ProjetosController@deletar']);

//rota para o caminho do cliente incluindo inserção/atualização e delete dos dados
Route::get('/admin/clientes',['as'=>'admin.clientes','uses'=>'App\Http\Controllers\Admin\ClientesController@index']);
Route::get('/admin/clientes/adicionar',['as'=>'admin.clientes.adicionar','uses'=>'App\Http\Controllers\Admin\ClientesController@adicionar']);
Route::post('/admin/clientes/salvar',['as'=>'admin.clientes.salvar','uses'=>'App\Http\Controllers\Admin\ClientesController@salvar']);
Route::get('/admin/clientes/editar/{id}',['as'=>'admin.clientes.editar','uses'=>'App\Http\Controllers\Admin\ClientesController@editar']);
Route::put('/admin/clientes/atualizar/{id}',['as'=>'admin.clientes.atualizar','uses'=>'App\Http\Controllers\Admin\ClientesController@atualizar']);
Route::get('/admin/clientes/deletar/{id}',['as'=>'admin.clientes.deletar','uses'=>'App\Http\Controllers\Admin\ClientesController@deletar']);