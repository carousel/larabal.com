<?php


Route::get('/','HomeController@getIndex');
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

Route::group(["prefix" => "admin"],function()
{
    Route::get('/','HomeController@getIndex');
    Route::get("/","AdminController@getIndex");
    Route::get('/logout','Auth\AuthController@getLogout');
    Route::get('/article/create','ArticleController@getCreate');
    Route::get('/article/edit/{id}','ArticleController@getEdit');
    Route::post('/article/edit/{id}','ArticleController@postEdit');
    Route::get('/article/delete/{id}','ArticleController@getDelete');
    Route::post('/article/create','ArticleController@postCreate');
});
