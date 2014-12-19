<?php

class TeacherController extends BaseController {


    public function dashboard()
    {
        $user = Auth::user();
        return View::make('teacher/dashboard',array('user'=>$user,'title'=>'Dashboard'));
    }
    
    public function reports()
    {
        $user = Auth::user();
        return View::make('teacher/reports',array('user'=>$user,'title'=>'Statistics'));
    }
    public function calendar()
    {
        $user = Auth::user();
        return View::make('teacher/calendar',array('user'=>$user,'title'=>'Calendar'));
    }
    public function incidents()
    {
        $user = Auth::user();
        return View::make('teacher/incidents',array('user'=>$user,'title'=>'Incidents'));
    }
    public function notifications()
    {
        $user = Auth::user();
        return View::make('teacher/notifications',array('user'=>$user,'title'=>'Notifications'));
    }
    public function time_table()
    {
        $user = Auth::user();
        return View::make('teacher/time_table',array('user'=>$user,'title'=>'Time Table'));
    }
    public function add_results()
    {
        
        $user = Auth::user();
        $teacher = Teacher::find($user->mem_id);
        $subjects = $teacher->subjects;
        $students = $teacher->students();

        return View::make('teacher/add_results',array('user'=>$user,'students'=>$students,'subjects'=>$subjects, 'title'=>'Add Results'));
    }
    public function profile()
    {
        $user = Auth::user();
        return View::make('teacher/profile',array('user'=>$user,'title'=>'Profile'));
    }
}
