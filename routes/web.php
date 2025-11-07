<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/rota', function(){
    return "<h1>Olá Laravel!</h1>";
});
Route::get('/user', function(){
    return "<h1>Aqui está os usuários</h1>";
});
/*Route::get('/injection', function(Request $request){
    var_dump($request);
});
*/
Route::match(['get', 'post'], '/match', function(){
    return "<h1>Aqui está aceitando os métodos GET e POST</h1>";
});

Route::any('/any', function(){
    return "<h1>Aqui é possível aceitar qualquer método http verb</h1>";
});

Route::view('/view', 'home');

Route::view('/view2', 'home', ['MyName' => 'Cleberson Ribeiro']);


Route::any('/any', function(){
    return "<h1>Aqui é possível aceitar qualquer método http verb</h1>";
});
Route::get('/valor/{value}', [MainController::class, 'mostrarValor']);
