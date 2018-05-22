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


Route::group(['middleware' => 'auth'], function() {
    Route::get('/user/profile', [
        'uses' => 'UserController@userProfile',
        'as' => 'user.profile'
    ]);
    
    Route::get('/user/profile/account', [
        'uses' => 'UserController@userAccount',
        'as' => 'user.account'
    ]);

    Route::patch('/users/profile/account/{user}/name-update',  [
        'as' => 'user.nameUpdate', 
        'uses' => 'UserController@nameUpdate'
    ]);

    Route::patch('/users/profile/account/{user}/email-update',  [
        'as' => 'user.emailUpdate', 
        'uses' => 'UserController@emailUpdate'
    ]);

    Route::patch('/users/profile/account/{user}/password-update',  [
        'as' => 'user.passwordUpdate', 
        'uses' => 'UserController@passwordUpdate'
    ]);

    Route::get('/logout', [
        'uses' => '\App\Http\Controllers\Auth\LoginController@logout',
        'as' => 'logout'
    ]);
}); 

Auth::routes();


