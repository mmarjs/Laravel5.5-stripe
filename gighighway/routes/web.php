<?php

/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::resource('category', 'CategoriesController');
Route::post('search', 'SearchController@search')->name('global.search');

Route::group([
    'prefix' => 'dashboard',
    'namespace' => 'Dashboard',
    'middleware' => 'auth'
], function() {
    Route::get('vendors/{id}/billing', 'VendorsController@billing')->name('vendors.billing');
    Route::resource('vendors', 'VendorsController');
    Route::resource('quote-requests', 'QuoteRequestsController');

    # Page Views
    Route::resource('views', 'ViewController', [
        'names' => [
            'index' => 'dashboard.views.index'
        ]
    ]);

    Route::get('switch-profiles/{id}', 'DashboardController@switchProfiles')->name('switchProfile');
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
/* Show Member Profile quote etc*/

Route::get('/member', 'VisitorController@index');
Route::get('/freesignup', 'PageController@freesignup');
/*
 * Static Pages
 */
Route::get('aboutus', 'PageController@aboutUs');
Route::get('privacypolicy', 'PageController@privacyPolicy');
Route::get('termsofuse', 'PageController@termsOfUse');
Route::get('contactus', 'PageController@contactUs');
Route::post('contactus', 'PageController@postContactUs');
Route::get('/signin', 'PageController@signin');
Route::get('/register', 'PageController@register');
Route::get('/forgot-password', 'PageController@forgotPassword');
Route::get('/pricing', 'PageController@pricing');
Route::get('/requestquote', 'PageController@request_quote');
Route::get('/signup', 'PageController@signup');
Route::get('/profile/{id}', 'VendorController@profile');
Route::get('/help','PageController@help');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{slug}', 'VendorController@show')->name('vendorProfile');
Route::get('/','PageController@index');

