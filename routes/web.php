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

Auth::routes();
Route::get('/','RecipeController@index');
Route::prefix('crawl')->group(function () {
    Route::get('/epicurious','CrawlLinksController@epicuriousData');
    Route::get('/epicsingle','CrawlLinksController@epicriciousSingle');
});

Route::post('/newsletter','NewsLetterController@store');


Route::get('/recipe/create','RecipeController@create');
Route::post('/recipe/store','RecipeController@store');
Route::get('/recipe/{slug}','RecipeController@show');

Route::get('/search','SearchController@index');


Route::post('favorite','FollowableController@favorite');
Route::post('follow','FollowableController@follow');
Route::post('unfollow','FollowableController@unfollow');
Route::post('voteup','FollowableController@voteup');
Route::post('votedown','FollowableController@votedown');



Route::get('/home', 'HomeController@index')->name('home');