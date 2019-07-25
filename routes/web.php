<?php

//arquivo para definir as rotas, url

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index'); //chama o metodo listar series da classe series controller

Route::get('/series/create', 'SeriesController@create'); //chama o metodo listar series da classe series controller

Route::post('/series/create', 'SeriesController@store');
//quando for usado o verbo post, vai chamar o series controller e como ação o store