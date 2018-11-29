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

//Route::get('/', 'Frontend\HomeController@indexAction');

Route::get('/language/{language?}', 'Frontend\PageController@languageAction');

Route::get('/{page?}', 'Frontend\PageController@indexAction');

Route::post('/frontend/ajax', 'Frontend\PageController@postAjaxAction');