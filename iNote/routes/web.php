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
});
Route::group(['prefix'=>'types'],function (){
    Route::get('/','TypeController@index')->name('types.list');
    Route::get('/store','TypeController@store')->name('types.store');
    Route::post('/store','TypeController@create')->name('types.create');
    Route::get('/edit/{id}','TypeController@edit')->name('types.edit');
    Route::post('/edit/{id}','TypeController@update')->name('types.update');
    Route::get('/destroy/{id}','TypeController@destroy')->name('types.destroy');

});
Route::group(['prefix'=>'notes'],function (){
    Route::get('/','NoteController@index')->name('notes.list');
    Route::get('/store','NoteController@store')->name('notes.store');
    Route::post('/store','NoteController@create')->name('notes.create');
    Route::get('/edit/{id}','NoteController@edit')->name('notes.edit');
    Route::post('/edit/{id}','NoteController@update')->name('notes.update');
    Route::get('/destroy/{id}','NoteController@destroy')->name('notes.destroy');
    Route::post('/search','NoteController@search')->name('notes.search');

});
