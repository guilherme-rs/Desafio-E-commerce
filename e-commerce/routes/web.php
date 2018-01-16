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

//Rota inicial da pagina
Route::get('/', function () {
    return view('layouts.index');
}) -> name('home');

//Rota da Home para os clientes apos o login
Route::get('/index', function () {
    return view('layouts.home');
}) -> name('index');

//Rota do paindel adminidtrativo para os administradores apos o login
Route::get('/admin', function (){
    return view('layouts.adm');
}) -> name('adm');

//Rotas de Categoria
Route::resource('categorias', 'CategoriasController');

//Rotas de Clientes
Route::resource('clientes', 'ClientesController');

//Rotas de Item Pedidos
Route::resource('itempedidos', 'ItempedidosController');

//Rotas de Pedidos
Route::resource('pedidos', 'PedidosController');

//Rotas de Produtos
Route::resource('produtos', 'ProdutosController');

//Rotas de pagina de login e validação dos clientes
Route::get('/login/cliente', 'LoginController@cliente') -> name('login.cliente');
Route::post('/login/cliente', 'LoginController@validarCliente') -> name('login.validarCliente');

//Rotas de pagina de login e validação dos administradores
Route::get('/login/admin', 'LoginController@admin') -> name('login.admin');
Route::post('/login/admin', 'LoginController@validarAdmin') -> name('login.validarAdmin');