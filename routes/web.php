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

Route::get('/', ['uses' => 'MainPageController@getIndex', 'as' => '/']);
Route::get('/abana', ['uses' => 'MainPageController@getAbana', 'as' => 'children']);
Route::get('/urukundo', ['uses' => 'MainPageController@getLove', 'as' => 'love']);
Route::get('/inganzo', ['uses' => 'MainPageController@getInspiration', 'as' => 'inspiration']);
Route::get('/iterambere', ['uses' => 'MainPageController@getPersonal', 'as' => 'personal']);
Route::get('/iyobokamana', ['uses' => 'MainPageController@getReligion', 'as' => 'religion']);
Route::get('/amaseries', ['uses' => 'MainPageController@getSeries', 'as' => 'series']);
Route::get('/inkuru_nto', ['uses' => 'MainPageController@getShort', 'as' => 'short']);
Route::get('/tumenyeshe', ['uses' => 'MainPageController@getContact', 'as' => 'contact']);
Route::post('/tumenyeshe', ['uses' => 'MainPageController@postContact', 'as' => 'contact']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/children', 'HomeController@Abana')->name('abana');
Route::get('/love', 'HomeController@Love')->name('urukundo');
Route::get('/inspiration', 'HomeController@Inspiration')->name('inganzo');
Route::get('/personal', 'HomeController@Personal')->name('iterambere');
Route::get('/religion', 'HomeController@Religion')->name('iyobokamana');
Route::get('/series', 'HomeController@Series')->name('amaseries');
Route::get('/short_stories', 'HomeController@Short')->name('inkuru_nto');
Route::get('/contact_us', 'HomeController@Contact')->name('tumenyeshe');
Route::post('/contact_us', 'HomeController@postContact')->name('tumenyeshe');




Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admins', 'AdminController@getAdmins')->name('admin.admins');
    Route::post('/register', 'AdminController@register')->name('admin.register.submit');
    Route::get('/register', 'AdminController@showRegisterForm')->name('admin.register');
    Route::get('/admins/{post}', 'AdminController@show')->name('admin.admins.show');
    Route::put('/admins/{post}', 'AdminController@update')->name('admin.admins.update');
    Route::delete('/admins/{post}', 'AdminController@destroy')->name('admin.admins.destroy');
    Route::get('/admins/{post}/edit', 'AdminController@edit')->name('admin.admins.edit');

    Route::prefix('users')->group(function(){
        Route::get('/', 'UserController@getUsers')->name('admin.users');
        Route::get('/{post}', 'UserController@show')->name('admin.users.show');
    });

    Route::prefix('messages')->group(function(){
        Route::get('/', 'MessageController@getMessages')->name('admin.messages');
        Route::get('/{post}', 'MessageController@show')->name('admin.messages.show');
    });

    Route::resource('/books', 'BookController');
    Route::resource('/series', 'SerieController');
    Route::resource('/shorts', 'ShortController');
});

Route::get('{id}', ['as' => 'single', 'uses' => 'SingleController@getSingle']);
Route::get('/serie/{id}', ['as' => 'seriesStories', 'uses' => 'SingleController@getSeries']);
Route::get('/short/{id}', ['as' => 'shortStories', 'uses' => 'SingleController@getShorts']);
Route::get('/ibitabo/{$pdf}', 'DownloadController@download')->name('download');

/*
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
*/