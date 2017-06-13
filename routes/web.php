<?php

Route::get('/', function () {
    return view('layout');
});

Route::get('/welcome', function(){
  return view('welcome');
});

Route::get('/things', 'ThingController@things');

Route::post('/thing', 'ThingController@show');
