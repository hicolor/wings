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

    Route::get('admin/articlecategory',['as'=>'admin-article-category','uses'=>'TagController@Index']);
    Route::any('admin/articlecategory/add',['uses'=>'TagController@CategoryAdd']);
    Route::any('admin/articlecategory/edit',['uses'=>'TagController@CategoryEdit']);

    Route::get('admin/taglist',['as'=>'admin-article-tag','uses'=>'TagController@Taglist']);
});
