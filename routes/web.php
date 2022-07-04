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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', 'SiteController@index')->name('index');
Route::get('/contact-us', 'SiteController@contact')->name('contact');

Route::prefix('admin')->name('admin.')->group(function ()
{
    Route::prefix('/categories')->name('category.')->group(function ()
    {
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::post('/create', 'CategoryController@save')->name('save');
        Route::get('/{slug}', 'CategoryController@show')->name('show');
        Route::post('/{slug}', 'CategoryController@update')->name('update');
        Route::post('/avatar/{category}', 'CategoryController@updateAvatar')->name('updateavatar');
        Route::get('/', 'CategoryController@index')->name('index');
    });

    Route::prefix('/products')->name('product.')->group(function ()
    {
        Route::get('/create', 'ProductsController@create')->name('create');
        Route::post('/create', 'ProductsController@store')->name('save');
        Route::get('/show/{slug}', 'ProductsController@show')->name('show');
        Route::get('/', 'ProductsController@index')->name('index');
    });


    Route::prefix('/applications')->name('application.')->group(function ()
    {
        Route::get('/create', 'ApplicationController@create')->name('create');
        Route::post('/create', 'ApplicationController@store')->name('save');
        Route::get('/show/{slug}', 'ApplicationController@show')->name('show');
        Route::get('/', 'ApplicationController@index')->name('index');
    });

    Route::prefix('/tests')->name('test.')->group(function ()
    {
        Route::get('/create', 'TestsController@create')->name('create');
        Route::post('/create', 'TestsController@store')->name('save');
        Route::get('/show/{slug}', 'TestsController@show')->name('show');
        Route::get('/', 'TestsController@index')->name('index');
    });


    Route::prefix('/users')->name('user.')->group(function ()
    {
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/create', 'UserController@store')->name('save');
        Route::get('/show/{slug}', 'UserController@show')->name('show');
        Route::get('/', 'UserController@index')->name('index');
    });
});


