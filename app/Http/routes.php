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
    //return view('test.index');
});

Route::group(['prefix'=>'admin'], function(){
    Route::resource('users','UsersController' );
});
//grupo de rutas
/*Route::group(['prefix'=>'articles'], function(){
    Route::get('view/{article?}', function($article="vacio"){
        echo $article;
    });
});*/
//uso de rutas
//
/*Route::get('articles/{nombre?}', function($nombre="no coloco nombre"){

    echo "El nombre que has colocado es:".$nombre;
});
*/

//uso de controladores
/*Route::group(['prefix'=>'articles'], function(){
    Route::get('view/{id}',[
        'uses'=> 'TestController@view',
        'as'=> 'articlesview'
        
    ]);
});*/
/*rutas manejados por contralador

Route::resource('/test','TestController');
 * /
 */