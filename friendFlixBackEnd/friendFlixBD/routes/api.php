<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('listaUser', 'User_Controller@listUser');
Route::get('mostraUser/{id}', 'User_Controller@showUser');
Route::post('criaUser', 'User_Controller@createUser');
Route::put('atualizaUser/{id}', 'User_Controller@updateUser');
Route::delete('deletaUser/{id}', 'User_Controller@deleteUser');



Route::middleware('auth:api')->get('/comment', function (Request $request) {
    return $request->comment();
});

Route::get('listaComment', 'Comment_Controller@listComment');
Route::get('mostraComment/{id}', 'Comment_Controller@showComment');
Route::post('criaComment', 'Comment_Controller@createComment');
Route::put('atualizaComment/{id}', 'Comment_Controller@updateComment');
Route::delete('deletaComment/{id}', 'Comment_Controller@deleteComment');



Route::middleware('auth:api')->get('/serie', function (Request $request) {
    return $request->serie();
});

Route::get('listaSerie', 'Serie_Controller@listSerie');
Route::get('mostraSerie/{id}', 'Serie_Controller@showSerie');
Route::post('criaSerie', 'Serie_Controller@createSerie');
Route::put('atualizaSerie/{id}', 'Serie_Controller@updateSerie');
Route::delete('deletaSerie/{id}', 'Serie_Controller@deleteSerie');