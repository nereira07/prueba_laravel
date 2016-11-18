<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//grupo de rutas
/*Route::group(['prefix'=>'articles'], function(){
    Route::get('view/{article?}', function($article="vacio"){
        echo $article;
    });
});*/

//uso de controladores
Route::group(['prefix'=>'articles'], function(){
    Route::get('view/{id}', [
        'uses'=>'TestController@view',
        'as'=>'articlesview'
    ]);
});