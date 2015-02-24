<?php


Route::get('/','HomeController@getIndex');
Route::post('/subscribe','UserController@subscribe');
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');
Route::get("/users/unsubscribe/{id}","UserController@unsubscribe");
Route::get("/category/{tag}","ArticleController@groupCategories");
Route::get("/category/show/{id}","ArticleController@show");
Route::post("/search","ArticleController@search");
Route::get("/resources","ResourcesController@getIndex");

Route::group(["prefix" => "admin"],function()
{
    Route::get('/','HomeController@getIndex');
    Route::get("/","AdminController@getIndex");
    Route::get('/logout','Auth\AuthController@getLogout');

    Route::get('/article/create','ArticleController@getCreate');
    Route::post('/article/create','ArticleController@postCreate');
    Route::get('/article/edit/{id}','ArticleController@getEdit');
    Route::post('/article/edit/{id}','ArticleController@postEdit');
    Route::get('/article/delete/{id}','ArticleController@getDelete');

    Route::get('/news/create','NewsController@getCreate');
    Route::post('/news/create','NewsController@postCreate');
    Route::get('/news/edit/{id}','NewsController@getEdit');
    Route::post('/news/edit/{id}','NewsController@postEdit');
    Route::get('/news/delete/{id}','NewsController@getDelete');

    Route::get('/resources/create','ResourcesController@getCreate');
    Route::post('/resources/create','ResourcesController@postCreate');
    Route::get('/resources/edit/{id}','ResourcesController@getEdit');
    Route::post('/resources/edit/{id}','ResourcesController@postEdit');
    Route::get('/resources/delete/{id}','ResourcesController@getDelete');
});
