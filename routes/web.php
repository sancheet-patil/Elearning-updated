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
Route::get('/blog', 'blogcontroller@index')->name('blog');
Route::get('/singleblog/{id}', 'blogcontroller@singleblog')->name('singleblog');
Route::get('/goal/{id}', 'blogcontroller@goal')->name('goal');



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

        //videos 
        Route::post('/Upload-Specialvideos','Admin\SpecialVideosController@save')->name('admin.Specialvideos.save');
        Route::get('/Specialvideos','Admin\SpecialVideosController@view')->name('admin.Specialvideos.view');
        Route::delete('/Specialvideos-delete','Admin\SpecialVideosController@delete')->name('admin.Specialvideos.delete');

        Route::post('/Upload-Motivationalvideos','Admin\MotivationalVideosController@save')->name('admin.Motivationalvideos.save');
        Route::get('/Motivationalvideos','Admin\MotivationalVideosController@view')->name('admin.Motivationalvideos.view');
        Route::delete('/Motivationalvideos-delete','Admin\MotivationalVideosController@delete')->name('admin.Motivationalvideos.delete');


        //payment allocation
        Route::get('/payment-allocation','Admin\paymentAllocationcontroller@view')->name('admin.payment_allocation.view');
        Route::post('/payment-allocation-save','Admin\paymentAllocationcontroller@save')->name('admin.payment_allocation.save');



        //Assiging Group Admin 
        Route::put('/teacher-GroupName-approve','Admin\AdminTeacherGroupController@approve')->name('admin.teacher_GroupName.approve');
        Route::delete('/teacher-GroupName-delete','Admin\AdminTeacherGroupController@delete')->name('admin.teacher_GroupName.delete');
        Route::put('/teacher-GroupName-disapprove','Admin\AdminTeacherGroupController@disapprove')->name('admin.teacher_GroupName.disapprove');
        Route::post('/teacher-GroupAdminName-save', 'Admin\AdminTeacherGroupController@Admin')->name('Admin.GroupAdmin.save');

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

        //groups
        Route::get('/teacherGroup', 'Admin\AdminTeacherGroupController@teacherGroups')->name('admin.teacherGroup');

        //subscription Managment
        Route::get('/subscription_plans','Admin\adminSubscription_plans@view')->name('admin.subscription_plan.view');
        Route::post('/subscription_plans-save','Admin\adminSubscription_plans@save')->name('admin.subscription_plan.save');
        
        
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
          //For Admin Blog
        Route::get('getSubcourse/{id}','Admin\admin_blogController@getSubcourse');
        Route::get('getcourse/{id}','Admin\admin_blogController@getCourse');
        Route::get('/Adminblog','Admin\admin_blogController@index')->name('admin.Adminblog');
         Route::get('/createblog','Admin\admin_blogController@create')->name('admin.createblog');
         Route::post('/createblog','Admin\admin_blogController@store')->name('admin.store');
         Route::get('/edit/{id}','Admin\admin_blogController@edit')->name('admin.editblog');
         Route::post('/update/{id}','Admin\admin_blogController@update')->name('admin.update');
         Route::delete('/delete/{id}','Admin\admin_blogController@delete')->name('admin.delete');
         Route::get('/singleblog/{id}', 'Admin\admin_blogController@singleblog')->name('admin.singleblog');

         //Previous Papers
         Route::get('/paper','Admin\PreviousPaperController@index')->name('admin.paper');
         Route::post('/paper-upload','Admin\PreviousPaperController@import')->name('admin.upload');
         Route::get('/export', 'Admin\PreviousPaperController@export')->name('admin.export');

        

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

        //TestSeries
        Route::get('/testSeries','Teacher\testSeriescontroller@view')->name('teacher.testSeries');
        Route::post('/testSeries-upload','Teacher\testSeriescontroller@import')->name('import');
         Route::get('/testSeries-export','Teacher\testSeriescontroller@export')->name('teacher.testexport');

    //teacher groups
    Route::get('/Teacher-groups','Teacher\TeacherGroupController@group')->name('teacher.group');
    Route::post('/group-update', 'Teacher\TeacherGroupController@group_update')->name('teacher.group.update');
    Route::post('/group-delete', 'Teacher\TeacherGroupController@group_delete')->name('teacher.group.delete');
    Route::post('/groupAdmin-save', 'Teacher\TeacherGroupController@group_admin')->name('teacher.groupadmin.save');
    Route::post('/group-save', 'Teacher\TeacherGroupController@group_members')->name('teacher.groupmembers.save');
    Route::get('/Request-group','Teacher\TeacherGroupRequest@view')->name('teacher.group.view');
    Route::post('/Request-group-approve','Teacher\TeacherGroupRequest@request')->name('teacher.group.request');


    //posting free_videos
    Route::post('/Upload-free_videos','Teacher\uploadVideoController@save')->name('teacher.free_videos.save');
    Route::get('/free_videos','Teacher\uploadVideoController@view')->name('teacher.free_videos.view');
    Route::delete('/teacher-playerfree-videos-delete','Teacher\uploadVideoController@delete')->name('teacher.free_videos.delete');
    //Request sub-courses
    Route::get('/Request-subcourses','Teacher\TeachersubCourseRequest@view')->name('teacher.subcourses.view');
    Route::post('/Request-subcourses-approve','Teacher\TeachersubCourseRequest@request')->name('teacher.subcourses.request');
    
    Route::get('getSubcourse/{id}','Teacher\TeachersubCourseRequest@getSubcourse');
    Route::get('getcourse/{id}','Teacher\TeachersubCourseRequest@getCourse');

    //for blog 
  Route::get('getSubcourse/{id}','Teacher\add_blogcontroller@getSubcourse');
  Route::get('getcourse/{id}','Teacher\add_blogcontroller@getCourse');
  Route::get('/addblog','Teacher\add_blogcontroller@index')->name('teacher.addblog');
  Route::get('/createblog','Teacher\add_blogcontroller@create')->name('teacher.createblog');
  Route::post('/createblog','Teacher\add_blogcontroller@store')->name('teacher.store');
  Route::get('/edit/{id}','Teacher\add_blogcontroller@edit')->name('teacher.edit');
  Route::post('/update/{id}','Teacher\add_blogcontroller@update')->name('update1');
  Route::delete('/delete/{id}','Teacher\add_blogcontroller@delete')->name('delete');
  Route::get('/singleblog/{id}', 'Teacher\add_blogcontroller@singleblog')->name('teacher.singleblog');

    //Previous Papers
    Route::get('/paper','Teacher\previouspapersController@index')->name('teacher.paper');
    Route::post('/paper-upload','Teacher\previouspapersController@import')->name('teacher.upload');
    Route::get('/export', 'Teacher\previouspapersController@export')->name('teacher.export');

    //Notification
    Route::get('/send','Teacher\NotificationController@sendrNotification')->name('teacher.send');
    Route::get('/groupnotification','Teacher\NotificationController@groupNotification')->name('teacher.groupnotification');
    Route::get('/RequestsubcoursesNotification','Teacher\NotificationController@RequestsubcoursesNotification')->name('teacher.RequestsubcoursesNotification');
    Route::get('/BlogNotification','Teacher\NotificationController@BlogNotification')->name('teacher.BlogNotification');
    Route::get('/TestNotification','Teacher\NotificationController@TestNotification')->name('teacher.TestNotification');
    Route::get('/DeleteNotification','Teacher\NotificationController@DeleteNotification')->name('teacher.DeleteNotification');







    
});


  

Route::group(['middleware' => ['auth:teacher','TVedioVer']], function() {
    Route::prefix('teacher')->group(function() {
        Route::get('/', 'Teacher\TeacherController@index')->name('teacher.dashboard');


    });
});
