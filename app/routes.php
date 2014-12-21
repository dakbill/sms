<?php


Route::get('/', array('as'=>'home',
        function()
        {
            return View::make('home',array('title' => 'Home'));
        })
);

Route::group(array(), function()
{
    Route::post('sign-in', array('as' => 'home#sign-in', 'uses' => 'HomeController@sign_in'));
    Route::get('sign-out', array('as' => 'home#sign-out', 'uses' => 'HomeController@sign_out'));

});

Route::group(array('prefix' => 'admin'), function()
{
    Route::get('dashboard', array('as' => 'admin#dashboard', 'uses' => 'AdminController@dashboard'));
    Route::get('new-member-details', array('as' => 'admin#new-member-details', 'uses' => 'AdminController@new_member_details'));
    Route::get('enroll-teacher', array('as' => 'admin#enroll-teacher', 'uses' => 'AdminController@enroll_teacher'));
    Route::post('enroll-teacher', array('as' => 'admin#attempt-enroll-teacher', 'uses' => 'AdminController@enroll_teacher'));
    Route::get('enroll-student', array('as' => 'admin#enroll-student', 'uses' => 'AdminController@enroll_student'));
    Route::post('enroll-student', array('as' => 'admin#attempt-enroll-student', 'uses' => 'AdminController@enroll_student'));
    Route::get('reports', array('as' => 'admin#reports', 'uses' => 'AdminController@reports'));
    Route::get('calendar', array('as' => 'admin#calendar', 'uses' => 'AdminController@calendar'));
    Route::get('incidents', array('as' => 'admin#incidents', 'uses' => 'AdminController@incidents'));
    Route::get('notifications', array('as' => 'admin#notifications', 'uses' => 'AdminController@notifications'));
    Route::get('profile', array('as' => 'admin#profile', 'uses' => 'AdminController@profile'));

});

Route::group(array('prefix' => 'teacher'), function()
{
    Route::get('dashboard', array('as' => 'teacher#dashboard', 'uses' => 'TeacherController@dashboard'));
    Route::get('calendar', array('as' => 'teacher#calendar', 'uses' => 'TeacherController@calendar'));
    Route::get('notifications', array('as' => 'teacher#notifications', 'uses' => 'TeacherController@notifications'));
    Route::get('reports', array('as' => 'teacher#reports', 'uses' => 'TeacherController@reports'));
    Route::get('incidents', array('as' => 'teacher#incidents', 'uses' => 'TeacherController@incidents'));
    Route::get('time-table', array('as' => 'teacher#time-table', 'uses' => 'TeacherController@time_table'));
    Route::get('add-results', array('as' => 'teacher#add-results', 'uses' => 'TeacherController@add_results'));
    Route::get('profile', array('as' => 'teacher#profile', 'uses' => 'TeacherController@profile'));

});
Route::group(array('prefix' => 'guardian'), function()
{
    Route::get('dashboard', array('as' => 'guardian#dashboard', 'uses' => 'GuardianController@dashboard'));
    Route::get('calendar', array('as' => 'guardian#calendar', 'uses' => 'GuardianController@calendar'));
    Route::get('reports', array('as' => 'guardian#reports', 'uses' => 'GuardianController@reports'));
    Route::get('pay-fees', array('as' => 'guardian#pay-fees', 'uses' => 'GuardianController@pay_fees'));
    Route::get('time-table', array('as' => 'guardian#time-table', 'uses' => 'GuardianController@time_table'));
    Route::get('profile', array('as' => 'guardian#profile', 'uses' => 'GuardianController@profile'));

});

Route::group(array('prefix' => 'student'), function()
{
    Route::get('dashboard', array('as' => 'student#dashboard', 'uses' => 'StudentController@dashboard'));
    Route::get('calendar', array('as' => 'student#calendar', 'uses' => 'StudentController@calendar'));
    Route::get('reports', array('as' => 'student#reports', 'uses' => 'StudentController@reports'));
    Route::get('pay-fees', array('as' => 'student#pay-fees', 'uses' => 'StudentController@pay_fees'));
    Route::get('time-table', array('as' => 'student#time-table', 'uses' => 'StudentController@time_table'));
    Route::get('profile', array('as' => 'student#profile', 'uses' => 'StudentController@profile'));

});