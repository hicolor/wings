<?php

/**
 * admin routes
 */

//common
Route::group(['namespace' => 'Admin\Common'], function () {

    Route::get('/admin', ['uses'=>'MainController@Main']);
    Route::get('/admin/index', ['uses'=>'MainController@Index']);

});

//
Route::group(['namespace' => 'Admin\Article'], function () {

    Route::get('/admin/article', ['uses'=>'ArticleController@Index']);

});