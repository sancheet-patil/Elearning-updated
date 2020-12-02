<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'student'], function () {
    Route::post('login', 'API\studentApicontroller@login');
    Route::post('signup', 'API\studentApicontroller@signup');
  
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::post('add-goal','API\user_goalController@add');
        Route::get('user-goal','API\user_goalController@data');
        Route::get('logout', 'API\studentApicontroller@logout');
        Route::get('user', 'API\studentApicontroller@user');
    });
});

Route::get('goals','API\goalsController@goals');

Route::get('previous-year','API\previousPaper@data');

Route::get('livestream','API\LivestreamController@view');

Route::get('free_videos','API\freevideosController@videos');

Route::get('special-video','API\specialvideos@data');

Route::get('test-Series','API\testSeriesController@data');

Route::get('homeVideo','API\homescreenController@data');

Route::post('test-series/submitReport','API\testSeriesController@submitReport');

Route::group(['prefix'=>'courses'],function(){
        Route::get('all_courses','API\coursesController@courses');
        Route::get('course/{id}','API\coursesController@course');
});

Route::group(['prefix'=>'subcourses'],function(){
    Route::get('all_subcourses','API\subcourseController@subcourses');
    Route::get('subcourse/{id}','API\subcourseController@subcourse');
});