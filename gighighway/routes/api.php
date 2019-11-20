<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * Public API Routes
 */
Route::get('search/category', 'PublicSearchController@typeaheadCategories')->name('api.search.category');
Route::get('search/location', 'PublicSearchController@typeaheadLocations')->name('api.search.location');

Auth::routes();


// Auth Guard
Route::group(['middleware' => ['web', 'auth']], function() {
    Route::resource('images', 'ImagesApiController');

    Route::post('quotes/{id}/update-status', 'QuotesApiController@updateStatus');
    Route::resource('quotes', 'QuotesApiController');

    Route::post('vendors/{vendorId}/change-plan', 'VendorsApiController@changePlan');
    Route::post('vendors/{vendorId}/update-payment-method', 'VendorsApiController@updatePaymentMethod');
    Route::post('vendors/{vendorId}/cancel-subscription', 'VendorsApiController@cancelSubscription');
    Route::post('vendors/{vendorId}/resume-subscription', 'VendorsApiController@resumeSubscription');
    Route::post('vendors/{vendorId}/favorite', 'VendorsApiController@favorite');
    Route::post('vendors/{vendorId}/unfavorite', 'VendorsApiController@unfavorite');
    Route::resource('vendors.reviews', 'VendorReviewsApiController');
    Route::resource('vendors', 'VendorsApiController');
    Route::resource('videos', 'VideosApiController');
    Route::resource('audio', 'AudioApiController');
    Route::resource('songs', 'SongsApiController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
