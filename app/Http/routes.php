<?php


Route::get('/','HomeController@getIndex');

Route::get("/contact","HomeController@contactForm");
Route::post("/contact","HomeController@contact");

Route::get('/home','HomeController@getIndex');
Route::post('/subscribe','UserController@subscribe');
Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');
Route::get("/users/unsubscribe/{id}","UserController@unsubscribe");
Route::get("/category/{tag}","PostController@groupCategories");
Route::get("/category/show/{id}","PostController@show");
Route::post("/search","PostController@search");
Route::get("/resources","ResourceController@getIndex");
Route::get("/news","NewsController@getNews");

Route::group(["prefix" => "admin"],function()
{
    Route::get('/home','HomeController@getIndex');
    Route::get("/","AdminController@getIndex");
    Route::get('/logout','Auth\AuthController@getLogout');

    Route::get('/post/create','PostController@getCreate');
    Route::post('/post/create','PostController@postCreate');
    Route::get('/post/edit/{id}','PostController@getEdit');
    Route::post('/post/edit/{id}','PostController@postEdit');
    Route::get('/post/delete/{id}','PostController@getDelete');

    Route::get('/news/create','NewsController@getCreate');
    Route::post('/news/create','NewsController@postCreate');
    Route::get('/news/edit/{id}','NewsController@getEdit');
    Route::post('/news/edit/{id}','NewsController@postEdit');
    Route::get('/news/delete/{id}','NewsController@getDelete');

    Route::get('/resources/create','ResourceController@getCreate');
    Route::post('/resources/create','ResourceController@postCreate');
    Route::get('/resources/edit/{id}','ResourceController@getEdit');
    Route::post('/resources/edit/{id}','ResourceController@postEdit');
    Route::get('/resources/delete/{id}','ResourceController@getDelete');

    Route::get('/admin-plus','AdminController@getAdminPlusArea');
    Route::post('/admin-plus/create-user','AdminController@createUser');
    Route::get('/send-to-subs','EmailController@sendToSubs');
});
