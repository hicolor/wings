<?php

/**
 * admin routes
 */

//common
Route::group(['namespace' => 'Admin\Common'], function () {

    Route::get('/admin', ['uses'=>'MainController@Main']);
    Route::get('/admin/index', ['uses'=>'MainController@Index']);

});

//article
Route::group(['namespace' => 'Admin\Article'], function () {

    Route::get('/admin/article', ['uses'=>'ArticleController@Index']);
    Route::get('/admin/article/add', ['uses'=>'ArticleController@Add']);

    Route::get('admin/tag',['uses'=>'TagController@Index']);

});
