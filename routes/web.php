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

Route::get('logout', [
    'uses' => '\App\Http\Controllers\Auth\LoginController@logout',
    'as' => 'logout'
]);

Auth::routes();


