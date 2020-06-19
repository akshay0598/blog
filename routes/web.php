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

Route::group(['middleware'=>['web']],function()
{
Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
Route::get('/','PagesController@getIndex');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::resource('posts','PostController');
Route::post('save','PostController@store');


});

Route::auth();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout','HomeController@logout')->name('log');
