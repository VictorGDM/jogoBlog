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

use App\Http\Controllers\ForunsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home.index');
});

Route::get('/documentacao', 'DocumentacaoController@index');

Route::group(['prefix' => 'forum'], function(){
    Route::get('/', 'ForunsController@index');
    Route::get('/criar', 'ForunsController@createView');
    Route::get('/{id}/comentar', 'ForunsController@comentar');
    Route::post('/comentario', 'ForunsController@storeResp');
    Route::post('/store', 'ForunsController@store');
});
