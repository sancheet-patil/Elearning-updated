<?php

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

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('add-goal', 'API\user_goalController@add');
        Route::put('update-goal/{goal_id}', 'API\user_goalController@update');
        Route::delete('delete-goal/{goal_id}', 'API\user_goalController@delete');
        Route::get('user-goal', 'API\user_goalController@data');
        Route::get('logout', 'API\studentApicontroller@logout');
        Route::get('user', 'API\studentApicontroller@user');
        Route::get('tests/{test_id}/{goal_id}', 'API\testSeriesController@tests');
        Route::get('testsection/{goal_id}', 'API\testSeriesController@testsection');
        Route::post('change-password', 'API\studentApicontroller@change_password');
        Route::get('all_course_videos', 'API\freevideosController@all_course_videos');
        Route::get('course_videos/{course_id}', 'API\freevideosController@videos');
        Route::get('course_videos/subcourses/{subcourse_id}', 'API\freevideosController@subcourse_videos');

        Route::post('reset_password', 'API\studentApicontroller@reset_password');
    });
});

Route::get('all-tests/{goal_id}', 'API\testSeriesController@alltests');

Route::get('goals', 'API\goalsController@goals');

Route::get('previous-year', 'API\previousPaper@data');

Route::get('livestream', 'API\LivestreamController@view');

Route::get('special-video', 'API\specialvideos@data');

Route::get('test-Series', 'API\testSeriesController@data');

Route::get('homeVideo', 'API\homescreenController@data');

Route::post('test-series/submitReport', 'API\testSeriesController@submitReport');

Route::group(['prefix' => 'courses'], function () {
    Route::get('all_courses', 'API\coursesController@courses');
    Route::get('course/{id}', 'API\coursesController@course');
});

Route::group(['prefix' => 'subcourses'], function () {
    Route::get('all_subcourses', 'API\subcourseController@subcourses');
    Route::get('subcourse/{id}', 'API\subcourseController@subcourse');
});
