<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

//Pagina principal donde está el formulario de identificación
Route::get('/', ['before' => 'guest', function(){
    return View::make('index');
}]);
//Página oculta donde sólo puede ingresar un usuario identificado
Route::get('/welcome', ['before' => 'auth', function(){
    return View::make('welcome');
}]);
Route::get('/game', function(){
    return View::make('game');
});

Route::post('personas/store', array('uses' => 'PersonasController@store'));

//Procesa el formulario e identifica al usuario
Route::post('/login', ['uses' => 'AuthController@doLogin', 'before' => 'guest']);
//Desconecta al usuario
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);

//Route::resource('personas', 'PersonasController');

Route::group(array('before'=>'auth'), function() {   
    Route::resource('personas', 'PersonasController',
                array('only' => array('index','show','create', 'update', 'destroy', 'edit')));
});

/*Route::group(array('before'=>'guest'), function() {   
    Route::resource('personas', 'PersonasController',
                array('only' => array('store')));
});*/