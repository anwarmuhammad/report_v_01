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

Route::get('/summary', 'TasksController@summary');
//Route::get('/total_user', 'TasksController@user');

Route::post('/quran','QuranController@create');
Route::post('/hadith','HadithController@create');
Route::post('/literature','LiteratureController@create');
Route::post('/study','StudyController@create');
Route::post('/salat','SalatController@create');
Route::post('/dawat','DawatController@create');

Route::post('/orgwork','OrgWorkController@create');
Route::post('/contact','ContactController@create');
Route::post('/report','ReportController@create');
Route::post('/distribution','DistributionController@create');
Route::post('/baitulmaal','BaitulmaalController@create');
Route::post('/misc','MiscellaneousController@create');
Route::get('/profile','TasksController@ami');

Route::get('/statistics','TasksController@statistics');


Route::get('/notification','TasksController@notification');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/users', 'FollowController@index');
    Route::post('/follow/{user}', 'FollowController@follow');
    Route::delete('/unfollow/{user}', 'FollowController@unfollow');
    Route::get('/mentor','FollowController@mentor');
    Route::get('/follower','FollowController@followers');
});


