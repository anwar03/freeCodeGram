<?php

use Illuminate\Support\Facades\Auth;
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

Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');

Route::get('/story/create', 'StoryController@create')->name('story.create');
Route::get('/story/{story}', 'StoryController@show')->name('story.show');
Route::post('/story', 'StoryController@store')->name('story.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


