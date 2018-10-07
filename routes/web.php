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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/lock', function(){
    return view('auth.lock');
});


/**
 * Sample Pages
 */

Route::group(['prefix' => 'samples'], function () {
    
    $this->group(['prefix' => 'charts'], function() {
        $this->get('/chartjs', 'SamplesController@chartJS');
        $this->get('/flot', 'SamplesController@flotJS');
        $this->get('/morris', 'SamplesController@morrisJS');
        $this->get('/inline', 'SamplesController@inlineJS');
    });

    $this->group(['prefix' => 'forms'], function() {
        $this->get('advanced', 'SamplesController@formAdvanced');
        $this->get('editor', 'SamplesController@formEditor');
        $this->get('general', 'SamplesController@formGeneral');
    });
    
    
});

