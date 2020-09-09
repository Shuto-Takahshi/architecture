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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// 一般ユーザー
Route::prefix('photos')->name('photos.')->group(function () {
    Route::get('index', 'PhotoController@index')->name('index');
    Route::get('create', 'PhotoController@create')->name('create')->middleware('auth');
    Route::post('store', 'PhotoController@store')->name('store')->middleware('auth');
    Route::get('show/{photo}', 'PhotoController@show')->name('show');
    Route::get('edit/{photo}', 'PhotoController@edit')->name('edit')->middleware('auth');
    Route::post('update/{photo}', 'PhotoController@update')->name('update')->middleware('auth');
    Route::post('destroy/{photo}', 'PhotoController@destroy')->name('destroy')->middleware('auth');

    Route::put('{photo}/like', 'PhotoController@like')->name('like')->middleware('auth');
    Route::delete('{photo}/like', 'PhotoController@unlike')->name('unlike')->middleware('auth');
});
// Route::resource('/photos', 'PhotoController')->except(['index','show'])->middleware('auth');

Route::prefix('users')->name('users.')->group(function () {
    Route::get('show/{user_id}', 'UserController@show')->name('show');
    Route::get('mypage', 'UserController@mypage')->name('mypage')->middleware('auth');
    Route::get('edit', 'UserController@edit')->name('edit')->middleware('auth');
    Route::post('update', 'UserController@update')->name('update')->middleware('auth');
    Route::middleware('auth')->group(function () {
        Route::put('{user_id}/follow', 'UserController@follow')->name('follow');
        Route::delete('{user_id}/follow', 'UserController@unfollow')->name('unfollow');
    });
});

Route::get('about/index', 'AboutController@index')->name('about.index');

Route::group(['prefix' => 'contact'], function() {
    Route::get('index', 'ContactController@index')->name('contact.index');
    Route::post('confirm', 'ContactController@confirm')->name('contact.confirm');
    Route::post('complete', 'ContactController@complete')->name('contact.complete');
});

// 管理者
Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'photo'], function() {
        Route::get('index', 'Admin\PhotoController@index')->name('admin.photo.index');
        Route::get('create', 'Admin\PhotoController@create')->name('admin.photo.create');
        Route::post('store', 'Admin\PhotoController@store')->name('admin.photo.store');
        Route::get('show/{id}', 'Admin\PhotoController@show')->name('admin.photo.show');
        Route::get('edit/{id}', 'Admin\PhotoController@edit')->name('admin.photo.edit');
        Route::post('update/{id}', 'Admin\PhotoController@update')->name('admin.photo.update');
        Route::post('destroy/{id}', 'Admin\PhotoController@destroy')->name('admin.photo.destroy');

        Route::put('like/{id}', 'Admin\PhotoController@like')->name('admin.photo.like');
        Route::delete('like/{id}', 'Admin\PhotoController@unlike')->name('admin.photo.unlike');
    });

    Route::group(['prefix' => 'user'], function() {
        Route::get('index', 'Admin\UserController@index')->name('admin.user.index');
        Route::get('show/{id}', 'Admin\UserController@show')->name('admin.user.show');
        Route::get('edit/{id}', 'Admin\UserController@edit')->name('admin.user.edit');
        Route::post('update/{id}', 'Admin\UserController@update')->name('admin.user.update');
        Route::post('destroy/{id}', 'Admin\UserController@destroy')->name('admin.user.destroy');
    });

    Route::get('about/index', 'Admin\AboutController@index')->name('admin.about.index');

    Route::group(['prefix' => 'contact'], function() {
        Route::get('index', 'Admin\ContactController@index')->name('admin.contact.index');
        Route::get('show/{id}', 'Admin\ContactController@show')->name('admin.contact.show');
        Route::post('reply', 'Admin\ContactController@reply')->name('admin.contact.reply');
        Route::post('confirm', 'Admin\ContactController@confirm')->name('admin.contact.confirm');
        Route::post('complete', 'Admin\ContactController@complete')->name('admin.contact.complete');
    });
});


