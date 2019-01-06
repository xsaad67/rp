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

Route::prefix('recipes')->group(function() {
    Route::get('/create','RecipeController@create');
    Route::post('/store','RecipeController@store');
    Route::get('/{slug}','RecipeController@show');
    Route::get('/edit/{recipe}','RecipeController@edit');
    Route::post('/update/{recipe}','RecipeController@update');
    Route::post('/delete/{recipe}','RecipeController@delete');
});


Route::resource('cuisines','CuisineController');
Route::resource('meals','CategoryController');

Route::prefix('crawl')->group(function () {
    // Route::get('/epicurious','CrawlLinksController@epicuriousData');
    // Route::get('/epicsingle','CrawlLinksController@epicriciousSingle');
    // Route::get('/ing','IngridentController@index');
    // Route::get('/category','CrawlController@getCat');
    // Route::get('/cuisine','CrawlController@getCuisine');
    // Route::get('/microdata','CrawlController@crawlMicroData');
    // Route::get('/random-users','CrawlLinksController@randomUsers');
    Route::get('/genius','CrawlLinksController@scrapeMicro');
    Route::get("/json","CrawlController@crawlGeniusKitchen");
});



Route::prefix('page')->group(function () {
    Route::post('/newsletter','NewsLetterController@store');
    Route::post('/unsub','NewsLetterController@destroy');
});


Route::group(['prefix' => 'member/', 'middleware' => ['auth']], function(){
    Route::get('reviews','RatingController@index');
    Route::post('/{model}/{id}','RatingController@store');
    Route::get('/edit/{user}','ProfileController@edit');
    Route::get('/update/{user}','ProfileController@update');
});


Route::prefix('chef')->group(function () {
    Route::get('/{slug}','ProfileController@show');
});

Route::get('/search','SearchController@simpleLikeSearch');


Route::post('favorite','FollowableController@favorite');
Route::post('follow','FollowableController@follow');
Route::post('unfollow','FollowableController@unfollow');
Route::post('voteup','FollowableController@voteup');
Route::post('votedown','FollowableController@votedown');


// All admin Routes here

Route::group(['prefix' => 'area51', 'middleware' => ['admin']], function(){
    Route::resource('/','Admin\AdminController');
    Route::resource("/cuisine","Admin\CuisineController");
    Route::resource("/category","Admin\CategoryController");
    Route::resource("/recipes","Admin\RecipeController");
});


Route::get('/home', 'HomeController@index')->name('home');
