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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// 一般ユーザー
Route::group(['prefix' => 'photo'], function() {
    Route::get('index', 'PhotoController@index')->name('photo.index');
    Route::get('create', 'PhotoController@create')->name('photo.create');
    Route::post('store', 'PhotoController@store')->name('photo.store');

    // Route::get('show/{id}', 'PhotoController@show')->name('photo.show');
    Route::get('show', 'PhotoController@show')->name('photo.show');

    Route::get('edit/{id}', 'PhotoController@edit')->name('photo.edit');
    Route::post('update/{id}', 'PhotoController@update')->name('photo.update');
    Route::post('destroy/{id}', 'PhotoController@destroy')->name('photo.destroy');

    Route::put('like/{id}', 'PhotoController@like')->name('photo.like');
    Route::delete('like/{id}', 'PhotoController@unlike')->name('photo.unlike');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('show', 'UserController@show')->name('user.show');
    // Route::get('show/{user_id}', 'UserController@show')->name('user.show');

    // Route::get('edit/{id}', 'ProfileController@edit')->name('profile.edit');
    Route::get('edit', 'UserController@edit')->name('user.edit');
    Route::post('update', 'UserController@update')->name('user.update');
});

// Route::group(['prefix' => 'news'], function() {
//     Route::get('index', 'NewsController@index')->name('news.index');
//     // Route::get('show/{id}', 'NewsController@show')->name('news.show');
//     Route::get('show', 'NewsController@show')->name('news.show');
// });

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

    // Route::group(['prefix' => 'news'], function() {
    //     Route::get('index', 'Admin\NewsController@index')->name('admin.news.index');
    //     Route::get('create', 'Admin\NewsController@create')->name('admin.news.create');
    //     Route::post('store', 'Admin\NewsController@store')->name('admin.news.store');
    //     Route::get('show/{id}', 'Admin\NewsController@show')->name('admin.news.show');
    //     Route::get('edit/{id}', 'Admin\NewsController@edit')->name('admin.news.edit');
    //     Route::post('update/{id}', 'Admin\NewsController@update')->name('admin.news.update');
    //     Route::post('destroy/{id}', 'Admin\NewsController@destroy')->name('admin.news.destroy');
    // });

    Route::get('about/index', 'Admin\AboutController@index')->name('admin.about.index');

    Route::group(['prefix' => 'contact'], function() {
        Route::get('index', 'Admin\ContactController@index')->name('admin.contact.index');
        Route::get('show/{id}', 'Admin\ContactController@show')->name('admin.contact.show');
        Route::post('reply', 'Admin\ContactController@reply')->name('admin.contact.reply');
        Route::post('confirm', 'Admin\ContactController@confirm')->name('admin.contact.confirm');
        Route::post('complete', 'Admin\ContactController@complete')->name('admin.contact.complete');
    });
});


