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

Route::get("/ingredient/{name}","IngridentController@show");

Route::get("/tags/{slug}",'TagController@show');

Route::resource('cuisines','CuisineController');
Route::resource('meals','CategoryController');


Route::group(['prefix' => 'member/', 'middleware' => ['auth']], function(){
    Route::post('/reviews/{model}/{id}','RatingController@store');
    Route::get('reviews','RatingController@index');
    Route::get('favorites','FollowableController@listFavorite');
    Route::get('/edit/','ProfileController@edit');
    Route::get('/profile/update/','ProfileController@update');
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
    Route::resource("/posts",'PostController');
});



Route::prefix('crawl')->group(function () {
    Route::get('/','CrawlController@index');
    Route::get("/kraft","CrawlController@crawlKraftRecipe");
    Route::get('/genius','CrawlController@crawlGeniusKitchen');
});


Route::prefix('page')->group(function () {
    Route::post('/newsletter','NewsLetterController@store');
    Route::post('/unsub','NewsLetterController@destroy');
});
Route::get('/home', 'HomeController@index')->name('home');
