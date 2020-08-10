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

Route::get('/', 'FrontendController@index')->name('front');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//admin section
Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');

        //free-videos        
        Route::get('/teacher-free-videos','Admin\FreevideosController@view')->name('admin.free_videos.view');
        Route::get('/teacher-playfree-videos/{course_id}/{subcourse_id}','Admin\FreevideosController@getVideo')->name('admin.free_videos.playvideo');
        Route::delete('/teacher-playerfree-videos-delete','Admin\FreevideosController@delete')->name('admin.free_videos.delete');

        //Assiging Sub-courses to teacher
        Route::get('/teacher-subCourses','Admin\AdminTeacherSubCourses@viewApproved')->name('admin.teacher_assign_subCourses.view');
        Route::get('/teacher-subCoursesRequest','Admin\AdminTeacherSubCourses@viewRequest')->name('admin.teacher_assign_subCourses.viewRequest');
        Route::post('/teacher-assign-subCourses','Admin\AdminTeacherSubCourses@assign')->name('admin.teacher_assign_subCourses.assign');
        Route::post('/teacher-update-subCourses','Admin\AdminTeacherSubCourses@update')->name('admin.teacher_assign_subCourses.update');
        Route::put('/teacher-approve-subCourses','Admin\AdminTeacherSubCourses@approve')->name('admin.teacher_assign_subCourses.approve');
        Route::delete('/teacher-delete-subCourses','Admin\AdminTeacherSubCourses@delete')->name('admin.teacher_assign_subCourses.delete');
        Route::put('/teacher-disapprove-subCourses','Admin\AdminTeacherSubCourses@disapprove')->name('admin.teacher_assign_subCourses.disapprove');

        //teacher
        Route::get('/teacher', 'Admin\AdminTeacherController@teachers')->name('admin.teacher');

        Route::get('/teacher/search', 'Admin\AdminTeacherController@searchItem');

        Route::get('/teacher-view-verification-data/{id}', 'Admin\AdminTeacherController@view_veri_doc_file')->name('teacher.view.doc');
        Route::post('/teacher-view-verification-data-update', 'Admin\AdminTeacherController@view_veri_doc_file_update')->name('admin.teacher.acc.ver.update');

        //goals
        Route::get('/goals', 'Admin\AdmingoalsController@goals')->name('admin.goals');
        Route::post('/goal-save', 'Admin\AdmingoalsController@goal_save')->name('admin.goal.save');
        Route::post('/goal-update', 'Admin\AdmingoalsController@goal_update')->name('admin.goal.update');
        Route::post('/goal-delete', 'Admin\AdmingoalsController@goal_delete')->name('admin.goal.delete');

        //courses
        Route::get('/courses', 'Admin\AdminCoursesController@courses')->name('admin.courses');
        Route::post('/courses-save', 'Admin\AdminCoursesController@course_save')->name('admin.course.save');
        Route::post('/courses-update', 'Admin\AdminCoursesController@course_update')->name('admin.course.update');
        Route::post('/courses-delete', 'Admin\AdminCoursesController@course_delete')->name('admin.course.delete');

        //subcourses
        Route::get('/sub-courses', 'Admin\AdminsubCoursesController@subcourses')->name('admin.subCourses');
        Route::post('/sub-courses-save', 'Admin\AdminsubCoursesController@subcourse_save')->name('admin.subCourse.save');
        Route::post('/sub-courses-update', 'Admin\AdminsubCoursesController@subcourse_update')->name('admin.subCourse.update');
        Route::post('/sub-courses-delete', 'Admin\AdminsubCoursesController@subcourse_delete')->name('admin.subCourse.delete');

        //Syllabus
        Route::get('/select-syllabus','Admin\AdminControllersyllabus@select')->name('admin.syllabus.select');
        Route::get('/syllabus','Admin\AdminControllersyllabus@view')->name('admin.syllabus.view');
        Route::get('getSubcourse/{id}','Admin\AdminControllersyllabus@getSubcourse');
        Route::put('/update-syllabus','Admin\AdminControllersyllabus@update')->name('admin.syllabus.update');
        Route::post('/syllabusSave','Admin\AdminControllersyllabus@save')->name('admin.syllabus.save');
        Route::delete('/update-syllabus-chapter-delete','Admin\AdminControllersyllabus@deleteSyllabus')->name('admin.syllabus.deleteSyllabus');
        
        Route::get('/getSubchapter/{id}','Admin\AdminControllersyllabus@getSubchapter')->name('admin.syllabus.subChapter');
        Route::post('/addSubTopic','Admin\AdminControllersyllabus@addSubtopic')->name('admin.syllabus.addSubtopic'); 
        Route::put('/update-syllabus-sub_chapter','Admin\AdminControllersyllabus@updatesubchapter')->name('admin.syllabus.updatesubChapter');
        Route::delete('/update-syllabus-sub_chapter-delete','Admin\AdminControllersyllabus@deleteSubchapter')->name('admin.syllabus.deleteSubchapter');


        Route::get('getcourse/{id}','Admin\AdminCoursesController@getCourse');
    });
});






//teacher section
Route::prefix('teacher')->group(function (){
    Route::get('/register', 'Auth\TeacherLoginController@showRegisterform')->name('teacher.register');
    Route::post('/register-submit', 'Auth\TeacherLoginController@register_submit')->name('teacher.register.submit');
    Route::get('/login', 'Auth\TeacherLoginController@showLoginform')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
    Route::get('/logout', 'Auth\TeacherLoginController@logout')->name('teacher.logout');
    Route::get('/video-verification', 'TeacherVedioVerificationController@video_verification')->name('teacher.video.verification');
    Route::post('/video-verification-file-save', 'TeacherVedioVerificationController@video_verification_file_save')->name('teacher.video.file.upload');

    //teacher profile
    Route::get('/teacher-profile', 'Teacher\teacherProfileController@view')->name('teacher.teacherProfile');
    Route::post('/teacher-profile', 'Teacher\teacherProfileController@edit')->name('teacher.teacherProfile');



    //posting free_videos
    Route::post('/Upload-free_videos','Teacher\uploadVideoController@save')->name('teacher.free_videos.save');
    Route::get('/free_videos','Teacher\uploadVideoController@view')->name('teacher.free_videos.view');
    Route::delete('/teacher-playerfree-videos-delete','Teacher\uploadVideoController@delete')->name('teacher.free_videos.delete');
    //Request sub-courses
    Route::get('/Request-subcourses','Teacher\TeachersubCourseRequest@view')->name('teacher.subcourses.view');
    Route::post('/Request-subcourses-approve','Teacher\TeachersubCourseRequest@request')->name('teacher.subcourses.request');
    
    Route::get('getSubcourse/{id}','Teacher\TeachersubCourseRequest@getSubcourse');
    Route::get('getcourse/{id}','Teacher\TeachersubCourseRequest@getCourse');
    
});

Route::group(['middleware' => ['auth:teacher','TVedioVer']], function() {
    Route::prefix('teacher')->group(function() {
        Route::get('/', 'Teacher\TeacherController@index')->name('teacher.dashboard');


    });
});
