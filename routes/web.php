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

Route::get('/', ['uses' => 'MainPageController@getMining', 'as' => '/']);
Route::get('/prospection', ['uses' => 'MainPageController@getProspection', 'as' => 'prospection']);
Route::get('/development', ['uses' => 'MainPageController@getDev', 'as' => 'dev']);
Route::get('/operations', ['uses' => 'MainPageController@getOperations', 'as' => 'operations']);
Route::get('/processing', ['uses' => 'MainPageController@getProcessing', 'as' => 'processing']);
Route::get('/testing', ['uses' => 'MainPageController@getTesting', 'as' => 'testing']);
Route::get('/tagging', ['uses' => 'MainPageController@getTagging', 'as' => 'tagging']);
Route::get('/processing_tech', ['uses' => 'MainPageController@getProcessingTech', 'as' => 'processing_tech']);
Route::get('/packing', ['uses' => 'MainPageController@getPacking', 'as' => 'packing']);
Route::get('/shipping', ['uses' => 'MainPageController@getShipping', 'as' => 'shipping']);
Route::get('/trading', ['uses' => 'MainPageController@getTrading', 'as' => 'trading']);
Route::get('/product_port', ['uses' => 'MainPageController@getProduct_port', 'as' => 'product_port']);
Route::get('/services', ['uses' => 'MainPageController@getServices', 'as' => 'services']);
Route::get('/sustainability', ['uses' => 'MainPageController@getSustainability', 'as' => 'sustainability']);
Route::get('/quality', ['uses' => 'MainPageController@getQuality', 'as' => 'quality']);
Route::get('/safety', ['uses' => 'MainPageController@getSafety', 'as' => 'safety']);
Route::get('/env_sustainability', ['uses' => 'MainPageController@getEnv_sust', 'as' => 'env_sustainability']);
Route::get('/ITRI', ['uses' => 'MainPageController@getITRI', 'as' => 'ITRI']);
Route::get('/vision_mission', ['uses' => 'MainPageController@getVisionMission', 'as' => 'vision_mission']);
Route::get('/corporate_gov', ['uses' => 'MainPageController@getCorporate_gov', 'as' => 'corporate_gov']);
Route::get('/principles', ['uses' => 'MainPageController@getPrinciples', 'as' => 'principles']);
Route::get('/team', ['uses' => 'MainPageController@getTeam', 'as' => 'team']);
Route::get('/location', ['uses' => 'MainPageController@getLocation', 'as' => 'location']);
Route::get('/management', ['uses' => 'MainPageController@getManagement', 'as' => 'management']);
Route::get('/news', ['uses' => 'MainPageController@getNews', 'as' => 'news']);
Route::get('/careers', ['uses' => 'MainPageController@getCareers', 'as' => 'careers']);
Route::get('/current_jobs_offers', ['uses' => 'MainPageController@getJobs', 'as' => 'jobs']);
Route::get('/online_application', ['uses' => 'MainPageController@getApplication', 'as' => 'application']);
Route::get('/GTC', ['uses' => 'MainPageController@getGTC', 'as' => 'GTC']);
Route::get('/legal_notice', ['uses' => 'MainPageController@getLegal_notice', 'as' => 'legal_notice']);
Route::get('/publications', ['uses' => 'MainPageController@getPublication', 'as' => 'publications']);
Route::get('/contact_us', ['uses' => 'MainPageController@getContact', 'as' => 'contact']);
Route::post('/contact_us', ['uses' => 'MainPageController@postContact', 'as' => 'contact']);

Auth::routes();

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

    
    Route::resource('publications', 'PublicationController');

    Route::prefix('messages')->group(function(){
        Route::get('/', 'MessageController@getMessages')->name('admin.messages');
        Route::get('/{post}', 'MessageController@show')->name('admin.messages.show');
    });
});
Route::get('{id}', ['as' => 'single', 'uses' => 'SingleController@getSingle']);
Route::get('/ibitabo/{$pdf}', 'DownloadController@download')->name('download');

/*
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
*/