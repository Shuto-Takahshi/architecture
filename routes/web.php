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

// 一般ユーザー
Route::group(['prefix' => 'photo'], function() {
    Route::get('index', 'PhotoController@index')->name('photo.index');
    Route::get('create', 'PhotoController@create')->name('photo.create');
    Route::post('store', 'PhotoController@store')->name('photo.store');
    Route::get('show/{id}', 'PhotoController@show')->name('photo.show');
    Route::get('edit/{id}', 'PhotoController@edit')->name('photo.edit');
    Route::post('update/{id}', 'PhotoController@update')->name('photo.update');
    Route::post('destroy/{id}', 'PhotoController@destroy')->name('photo.destroy');

    Route::put('like/{id}', 'PhotoController@like')->name('photo.like');
    Route::delete('like/{id}', 'PhotoController@unlike')->name('photo.unlike');
});

Route::group(['prefix' => 'profile'], function() {
    Route::get('show/{id}', 'ProfileController@show')->name('profile.show');
    Route::get('edit/{id}', 'ProfileController@edit')->name('profile.edit');
    Route::post('update/{id}', 'ProfileController@update')->name('profile.update');
});

Route::group(['prefix' => 'news'], function() {
    Route::get('index', 'NewsController@index')->name('news.index');
    Route::get('show/{id}', 'NewsController@show')->name('news.show');
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
        Route::get('index', 'AdminPhotoController@index')->name('admin.photo.index');
        Route::get('create', 'AdminPhotoController@create')->name('admin.photo.create');
        Route::post('store', 'AdminPhotoController@store')->name('admin.photo.store');
        Route::get('show/{id}', 'AdminPhotoController@show')->name('admin.photo.show');
        Route::get('edit/{id}', 'AdminPhotoController@edit')->name('admin.photo.edit');
        Route::post('update/{id}', 'AdminPhotoController@update')->name('admin.photo.update');
        Route::post('destroy/{id}', 'AdminPhotoController@destroy')->name('admin.photo.destroy');

        Route::put('like/{id}', 'AdminPhotoController@like')->name('admin.photo.like');
        Route::delete('like/{id}', 'AdminPhotoController@unlike')->name('admin.photo.unlike');
    });

    Route::group(['prefix' => 'profile'], function() {
        Route::get('index', 'AdminProfileController@index')->name('admin.profile.index');
        Route::get('show/{id}', 'AdminProfileController@show')->name('admin.profile.show');
        Route::get('edit/{id}', 'AdminProfileController@edit')->name('admin.profile.edit');
        Route::post('update/{id}', 'AdminProfileController@update')->name('admin.profile.update');
        Route::post('destroy/{id}', 'AdminProfileController@destroy')->name('admin.profile.destroy');
    });

    Route::group(['prefix' => 'news'], function() {
        Route::get('index', 'AdminNewsController@index')->name('admin.news.index');
        Route::get('create', 'AdminNewsController@create')->name('admin.news.create');
        Route::post('store', 'AdminNewsController@store')->name('admin.news.store');
        Route::get('show/{id}', 'AdminNewsController@show')->name('admin.news.show');
        Route::get('edit/{id}', 'AdminNewsController@edit')->name('admin.news.edit');
        Route::post('update/{id}', 'AdminNewsController@update')->name('admin.news.update');
        Route::post('destroy/{id}', 'AdminNewsController@destroy')->name('admin.news.destroy');
    });

    Route::get('about/index', 'AdminAboutController@index')->name('admin.about.index');

    Route::group(['prefix' => 'contact'], function() {
        Route::get('index', 'AdminContactController@index')->name('admin.contact.index');
        Route::get('show/{id}', 'AdminContactController@show')->name('admin.contact.show');
        Route::post('reply', 'AdminContactController@reply')->name('admin.contact.reply');
        Route::post('confirm', 'AdminContactController@confirm')->name('admin.contact.confirm');
        Route::post('complete', 'AdminContactController@complete')->name('admin.contact.complete');
    });
});
