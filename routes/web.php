<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/articles', 'ManagementController@articles')->name('articles');
Route::get('/article/{article}', 'ManagementController@article')->name('article');
Route::get('/workers', 'ManagementController@workers')->name('workers');
Route::get('/groups', 'ManagementController@groups')->name('groups');
Route::get('/group/{group}', 'ManagementController@group')->name('group');
Route::get('/kid/{kid}', 'ManagementController@kid')->name('kid');
Route::get('/contacts', 'ManagementController@contacts')->name('contacts');

Route::group(['middleware' => ['auth']], function () {
    Route::post('/comment/store', 'Admin\CommentController@store')->name('comment.store');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    //Admin
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/', 'DashboardController@dashboard')->name('admin.index');
        Route::resource('/article', 'ArticleController', ['as' => 'admin']);
        Route::resource('/worker', 'WorkerController', ['as' => 'admin']);
        Route::resource('/group', 'GroupController', ['as' => 'admin']);
        Route::resource('/contact', 'ContactController', ['as' => 'admin']);
        Route::resource('/kid', 'KidController', ['as' => 'admin']);
        Route::resource('/comment', 'CommentController', ['as' => 'admin']);
        Route::resource('/position', 'PositionController', ['as' => 'admin']);
    });
});


Route::get('/', 'ManagementController@main')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
