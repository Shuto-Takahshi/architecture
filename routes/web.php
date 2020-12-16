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

Route::get('mails/send', 'SampleController@send');

Auth::routes();
// 一般ユーザー
Route::prefix('photos')->name('photos.')->group(function () {
    Route::get('index', 'PhotoController@index')->name('index');
    Route::get('create', 'PhotoController@create')->name('create')->middleware('auth');
    Route::post('store', 'PhotoController@store')->name('store')->middleware('auth');
    Route::get('/{photo}', 'PhotoController@show')->name('show');
    Route::get('edit/{photo}', 'PhotoController@edit')->name('edit')->middleware('auth');
    Route::post('update/{photo}', 'PhotoController@update')->name('update')->middleware('auth');
    Route::post('destroy/{photo}', 'PhotoController@destroy')->name('destroy')->middleware('auth');

    Route::put('{photo}/like', 'PhotoController@like')->name('like')->middleware('auth');
    Route::delete('{photo}/like', 'PhotoController@unlike')->name('unlike')->middleware('auth');
});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('{user_id}', 'UserController@show')->name('show');
    Route::get('{user_id}/likes', 'UserController@likes')->name('likes');
    Route::middleware('auth')->group(function () {
        Route::get('{user_id}/edit', 'UserController@edit')->name('edit');
        Route::post('{user_id}/update', 'UserController@update')->name('update');
        Route::put('{user_id}/follow', 'UserController@follow')->name('follow');
        Route::delete('{user_id}/follow', 'UserController@unfollow')->name('unfollow');
    });
});


// 管理者
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () { return redirect('/admin/home'); });
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
});

Route::group(['prefix' => 'admin', 'name' => 'admin.', 'middleware' => 'auth:admin'], function() {
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');

    Route::prefix('photos')->name('photos.')->group(function () {
        Route::get('index', 'Admin\PhotoController@index')->name('index');
        Route::get('show/{photo}', 'Admin\PhotoController@show')->name('show');
        Route::get('edit/{photo}', 'Admin\PhotoController@edit')->name('edit');
        Route::post('update/{photo}', 'Admin\PhotoController@update')->name('update');
        Route::post('destroy/{photo}', 'Admin\PhotoController@destroy')->name('destroy');
    });

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('index', 'Admin\UserController@index')->name('index');
        Route::get('show/{user_id}', 'Admin\UserController@show')->name('show');
        Route::get('edit/{user_id}', 'Admin\UserController@edit')->name('edit');
        Route::post('update/{user_id}', 'Admin\UserController@update')->name('update');
        Route::post('destroy/{user_id}', 'Admin\UserController@destroy')->name('destroy');
    });
});
