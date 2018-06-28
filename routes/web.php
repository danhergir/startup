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


Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'welcome.index'
]);

Route::get('/products/{product}', [ 
    'uses' => 'ProductController@showOne',
    'as' => 'welcome.show'
]);

//Add products to wishlist



Route::group(['middleware' => 'auth'], function() {

    /* User Routes related with his profile */
    Route::get('/user/profile', [
        'uses' => 'UserController@userProfile',
        'as' => 'user.profile'
    ]);
    
    Route::get('/user/profile/account', [
        'uses' => 'UserController@userAccount',
        'as' => 'user.account'
    ]);

    Route::patch('/user/profile/account/{user}/name-update',  [
        'uses' => 'UserController@nameUpdate',
        'as' => 'user.nameUpdate'
    ]);

    Route::patch('/user/profile/account/{user}/email-update',  [
        'uses' => 'UserController@emailUpdate',
        'as' => 'user.emailUpdate'
    ]);

    Route::patch('/user/profile/account/{user}/password-update',  [
        'uses' => 'UserController@passwordUpdate',
        'as' => 'user.passwordUpdate'
    ]);

    Route::get('/user/profile/address', [
        'uses' => 'UserController@getAddress',
        'as' => 'user.address'
    ]);

    Route::post('/user/profile/address/{user}/create', [
        'uses' => 'UserController@newAddress',
        'as' => 'user.newAddress'
    ]);

    Route::post('/user/profile/address/delete', [
        'uses' => 'UserController@deleteAddress',
        'as' => 'user.deleteAddress',
    ]);

    Route::get('/user/profile/reviews' , [
        'uses' => 'UserController@getReviews',
        'as' => 'user.review'
    ]);
    
    Route::post('/user/profile/reviews/delete', [
        'uses' => 'UserController@deleteReview',
        'as' => 'user.deleteReview'
    ]);

    Route::get('/logout', [
        'uses' => '\App\Http\Controllers\Auth\LoginController@logout',
        'as' => 'logout'
    ]);
    
    Route::get('/product/review/form/{product}', [
        'uses' => 'ProductController@createFormReview',
        'as' => 'create.review'
    ]);

    Route::post('/products/review/store', [
        'uses' => 'ProductReviewController@store',
        'as' => 'review.store'
    ]);

    Route::post('/like', [
        'uses' => 'ProductReviewController@postLike',
        'as' => 'like'
    ]);

    //User Lists - Wish List - Save For Later
    Route::get('/user/lists', [
        'uses' => 'UserController@getLists',
        'as' => 'user.lists'
    ]);
    
    Route::post('/addWishlist', [
        'uses' => 'UserController@addWishlist',
        'as' => 'product.wishlist'
    ]);

    Route::post('/user/wishlist/delete' , [
        'uses' => 'UserController@deleteWishlist',
        'as' => 'user.deleteWishlist'
    ]);

    //User Cart - Checkout
    Route::get('/user/cart' , [
        'uses' => 'ProductController@getCart',
        'as' => 'user.cart'
    ]);

    Route::get('/product/cart', [
        'uses' => 'ProductController@addCart',
        'as' => 'user.addCart'
    ]);

    Route::post('/product/cart/remove', [
        'uses' => 'ProductController@removeItem',
        'as' => 'user.removeItem'
    ]);
}); 

Auth::routes();


