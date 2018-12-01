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
    Route::get('/ing','IngridentController@index');
});



Route::prefix('page')->group(function () {
    Route::get('/unsub','NewsLetterController@edit');
    Route::post('/unsub','NewsLetterController@destroy');
});

Route::prefix('reviews')->group(function () {

	Route::post('/{model}/{id}','RatingController@store');
    Route::post('/save','RecipeReviewsController@store');
});


Route::prefix('chef')->group(function () {
    Route::get('/{slug}','ProfileController@show');
     Route::get('/edit/{user}','ProfileController@edit');
});

Route::post('/newsletter','NewsLetterController@store');


Route::get('/recipe/create','RecipeController@create');
Route::post('/recipe/store','RecipeController@store');
Route::get('/recipe/{slug}','RecipeController@show');
Route::get('recipe/edit/{id}','RecipeController@edit');
Route::post('recipe/update/{id}','RecipeController@update');
Route::post('recipe/delete','RecipeController@delete');


Route::get('/search','SearchController@simpleLikeSearch');


Route::post('favorite','FollowableController@favorite');
Route::post('follow','FollowableController@follow');
Route::post('unfollow','FollowableController@unfollow');
Route::post('voteup','FollowableController@voteup');
Route::post('votedown','FollowableController@votedown');

Route::group(['prefix' => 'area51', 'middleware' => ['admin']], function(){
    Route::get('dashboard','AdminController@index');
});


Route::get('/home', 'HomeController@index')->name('home');
