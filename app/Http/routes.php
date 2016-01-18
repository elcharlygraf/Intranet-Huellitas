<?php
/*
* LOGIN
*/
Route::get('/',  'Auth\AuthController@login')->name('login');

Route::group(['as' => 'acceso::', 'prefix' => 'acceso', 'namespace' => 'Auth'], function () {
    Route::get('/',  'AuthController@login')->name('login');
    Route::post('/', 'AuthController@postLogin')->name('postLogin');
    Route::get('/logout', 'AuthController@getLogout')->name('logout');
});

/*
* REGISTRO
*/
Route::group(['as' => 'register::', 'prefix' => 'register'], function () {

	Route::get('/padres',   'HomeController@createPadres')->name('padres');
	Route::get('/docentes', 'HomeController@createDocentes')->name('docentes');
	Route::get('/alumnos',  'HomeController@createAlumnos')->name('alumnos');

	Route::post('/padres',   'HomeController@storePadres')->name('postPadres');
	Route::post('/docentes', 'HomeController@storeDocentes')->name('postDocentes');
	Route::post('/alumnos',  'HomeController@storeAlumnos')->name('postAlumnos');
});

/*
* INTRANET
*/


//ADMINISTRACION - GRUPO A
Route::group( ['middleware' => ['auth'], 'prefix'=>'admin', 'namespace' => 'Admin', 'as' => 'admin::'], function() {
	
	//HOME
	Route::get('/',  'AdminController@index')->name('index');

	//MENU
	Route::get('/pdf/profesores',    'AdminController@pdfProfesores')->name('pdfProfesores');
	Route::get('/pdf/padres',        'AdminController@pdfPadres')->name('pdfPadres');
	Route::get('/videos/primaria',   'AdminController@videoPrimaria')->name('videoPrimaria');
	Route::get('/videos/secundaria', 'AdminController@videoSecundaria')->name('videoSecundaria');

	//REGISTRO CONTENIDO
	Route::group( ['prefix'=>'contenido'], function() {
		Route::get('/create/pdf',   'AdminController@createContenidoPdf')->name('createContenidoPdf');
		Route::get('/create/video', 'AdminController@createContenidoVideo')->name('createContenidoVideo');
		
		Route::post('/save/pdf',        'AdminController@storeContenido')->name('storeContenido');
		Route::post('/save/video',        'AdminController@storeContenidoVideo')->name('storeContenidoVideo');
		
	});
	
});

//ADMINISTRACION - GRUPO B
Route::group( ['middleware' => ['auth'], 'prefix'=>'users', 'as' => 'users::'], function() {
	
	Route::get('/welcome',   	  'HomeController@welcome')->name('welcome');
	Route::get('/select/grado',   'HomeController@selectgrado')->name('selectgrado');

	Route::get('/fichas/primaria/{grado}', 'HomeController@fichasPrimaria')->name('fichasPrimaria');
	Route::get('/fichas/secundaria/{grado}', 'HomeController@fichasSecundaria')->name('fichasSecundaria');

});
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