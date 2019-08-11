<?php

Route::get('/', function () {
    return redirect('/properties');
});

Route::resource('/properties', 'PropertyController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
