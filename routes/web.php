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
    return view('teste');
});


Route::get('contato', function () {
   return 'Página de contato';
});

Route::get('empresa', function () {
   return 'Página da Empresa';
});


Route::Match(['post', 'get'], 'match', function(){
   return 'Minha rota match';
});


Route::any('any', function () {
   return 'Rota do tipo any';
});

Route::get('produtos', function () {
   return 'Rota de produtos';
});

Route::get('produto/add', function () {
   return 'Formulário para adicionar produtos';
});

Route::get('produto/edit/{idProduto}', function ($idProduto) {
   return "Editar o produto => {$idProduto}";
})->where('idProduto', '[0-9]+');

Route::get('produto/delete/{idProduto?}', function ($idProduto=null) {
   return "Excluir o produto => {$idProduto}";
});

Route::get('produto/{idProduto}/imagem/{idImagem}', function ($idProduto, $idImagem) {
   return "Excluir o produto => {$idProduto} - e imagem => {$idImagem}";
});

Route::group(['middleware' => 'my-middleware', 'prefix' => 'painel' ], function () {
      
      Route::get('/', function(){
         return view('painel.home.index');
      });
      
      Route::get('financeiro', function(){
         return view('painel.financeiro.index');
      });
      
      Route::get('receber', function(){
         return "Contas à receber";
      });
      
      Route::get('pagar', function(){
         return "Contas à pagar";
      });
      
   });


Route::get('login', function(){
   return "Tela de Login 2";
});
