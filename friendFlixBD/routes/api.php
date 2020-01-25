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
