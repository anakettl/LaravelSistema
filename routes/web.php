<?php

//arquivo para definir as rotas, url

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index'); //chama o metodo listar series da classe series controller

Route::get('/series/create', 'SeriesController@create'); //chama o metodo listar series da classe series controller
