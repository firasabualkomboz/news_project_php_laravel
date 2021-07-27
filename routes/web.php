<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {return view('welcome');});
Route::get('/', 'HomeController@user_page')->name('front.home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/{slug}','HomeController@show_single_page')->name('front.single-page-posts');
route::get('/category/{id}','HomeController@show_category')->name('front.category');
//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
//	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//
//	// Route::get('/', function()
//	// {
//        Route::get('/test', 'TestController@index')->name('test');
//
//        // Route::get('index', 'dashboard\DashboardController')->name('index');
//
//	// });
//
//
//});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    Route::get('/test', 'TestController@index')->name('test');
});


// all routes front pages


