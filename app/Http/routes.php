<?php
/*
* LOGIN
*/
Route::group(['as' => 'acceso::', 'prefix' => 'acceso', 'namespace' => 'auth'], function () {
    Route::get('/',  'AuthController@login')->name('login');
    Route::post('/', 'AuthController@logout')->name('postLogin');
    Route::get('/logout', 'AuthController@logout')->name('logout');
});

/*
* REGISTRO
*/
Route::group(['as' => 'register::', 'prefix' => 'register'], function () {

	Route::get('/padres',   'HomeController@createPadres')->name('padres');
	Route::get('/docentes', 'HomeController@createDocentes')->name('docentes');
	Route::get('/alumnos',  'HomeController@createAlumnos')->name('alumnos');

	Route::post('/padres',   'HomeController@storePadres')->name('padres');
	Route::post('/docentes', 'HomeController@storeDocentes')->name('docentes');
	Route::post('/alumnos',  'HomeController@storeAlumnos')->name('alumnos');
});

/*
* INTRANET
*/
//DOCENTES
Route::group( ['middleware' => ['auth','docentes'], 'prefix'=>'docente', 'namespace' => 'docente', 'as' => 'docente::'], function() {
	Route::get('/',  'DocenteController@index')->name('home');
});

//ALUMNOS
Route::group( ['middleware' => ['auth','alumnos'], 'prefix'=>'alumno', 'namespace' => 'alumno', 'as' => 'alumno::'], function() {
	Route::get('/',  'AlumnoController@index')->name('home');
});

//PADRES
Route::group( ['middleware' => ['auth','padres'], 'prefix'=>'padre', 'namespace' => 'padre', 'as' => 'padre::'], function() {
	Route::get('/',  'PadreController@index')->name('home');
});

//ADMINISTRACION
Route::group( ['middleware' => ['auth','admin'], 'prefix'=>'admin', 'namespace' => 'admin', 'as' => 'admin::'], function() {
	Route::get('/',  'AdminController@index')->name('home');
});