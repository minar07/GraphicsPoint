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

Route::get('/', 'PageController@home')->name('welcome');
Route::get('/category/{category}', 'PageController@category')->name('category');
Route::get('/gig/{id}', 'PageController@gig_details')->name('gig_details');
Route::get('/gig/{id}/{package}', 'PageController@order_gig')->name('order_gig');
Route::get('/search', 'PageController@search_gig')->name('search_gig');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('gigs','GigController');
    Route::resource('sliders','SliderController');
    Route::resource('links','LinkController');
    Route::resource('products','ProductController');
});


Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'AddMoneyController@payWithStripe'));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));

// Route::get('addmoney/stripe', 'AddMoneyController@payWithStripe')->name('paywithstripe');
// Route::get('addmoney/stripe', 'AddMoneyController@postPaymentWithStripe')->name('stripe');
