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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('landing_page', 'LandingPageController@index')->name('landing_page');

Route::middleware(['auth', 'joined_home'])->group(function()
{
    Route::get('create_home', ['as'=>'create_home', 'uses'=>'HomeController@create']);
    Route::post('save_home', ['as'=>'save_home', 'uses'=>'HomeController@save']);
    Route::get('my_home', ['as'=>'my_home', 'uses'=>'HomeController@index']);
    Route::get('food_stock', ['as'=>'food_stock', 'uses'=>'FoodStockController@index']);
});