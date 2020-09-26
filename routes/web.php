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
    Route::get('{user_id}/likes', 'UserController@likes')->name('likes');
    Route::get('edit', 'UserController@edit')->name('edit')->middleware('auth');
    Route::post('update', 'UserController@update')->name('update')->middleware('auth');
    Route::middleware('auth')->group(function () {
        Route::put('{user_id}/follow', 'UserController@follow')->name('follow');
        Route::delete('{user_id}/follow', 'UserController@unfollow')->name('unfollow');
    });
});

// Route::group(['prefix' => 'contact'], function() {
//     Route::get('index', 'ContactController@index')->name('contact.index');
//     Route::post('confirm', 'ContactController@confirm')->name('contact.confirm');
//     Route::post('complete', 'ContactController@complete')->name('contact.complete');
// });

// 管理者
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () { return redirect('/admin/home'); });
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
});

Route::prefix('admin')->name('admin.')->group(function () {


    // Route::resource('/photos', 'PhotoController')->middleware('auth')->except(['create','store']);
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

    // Route::prefix('contacts')->name('contacts.')->group(function () {
    //     Route::get('index', 'Admin\ContactController@index')->name('index');
    //     Route::get('show/{id}', 'Admin\ContactController@show')->name('show');
    //     Route::post('reply', 'Admin\ContactController@reply')->name('reply');
    //     Route::post('confirm', 'Admin\ContactController@confirm')->name('confirm');
    //     Route::post('complete', 'Admin\ContactController@complete')->name('complete');
    // });
});


