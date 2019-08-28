<?php

//arquivo para definir as rotas, url

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'SeriesController@index')
->name('series.index'); //chama o metodo listar series da classe series controller

Route::get('/series/create', 'SeriesController@create')
->name('form_criar_serie'); //chama o metodo listar series da classe series controller

Route::post('/series/create', 'SeriesController@store');
//quando for usado o verbo post, vai chamar o series controller e como ação o store

Route::delete('/series/delete/{id}', 'SeriesController@destroy');
//rota pra excluir uma série, passando o id da série como parâmetro