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

Auth::routes(['register' => false]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/', 'WebsiteController@index')->name('index');
Route::get('/tags/{slug}', 'WebsiteController@tag')->name('tag');
Route::get('/news/{slug}', 'WebsiteController@post')->name('post');
Route::get('/news', 'WebsiteController@posts')->name('posts');
Route::get('/galleries', 'WebsiteController@galleries')->name('galleries');
Route::get('/contact', 'WebsiteController@showContactForm')->name('contact.show');
Route::post('/contact', 'WebsiteController@submitContactForm')->name('contact.submit');
Route::get('/about', 'WebsiteController@about')->name('about');
Route::get('/team', 'WebsiteController@team')->name('team');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@Index');
    Route::resource('tags', 'TagController');
    Route::resource('posts', 'PostController');
    Route::resource('galleries', 'GalleryController');
    Route::resource('setting', 'SettingController');
    Route::resource('/change_password', 'UserController');
    Route::post('/uploadImage', 'ImageController@uploadImage')->name('uploadImage');
});
