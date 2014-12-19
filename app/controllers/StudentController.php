<?php

class StudentController extends BaseController {


    public function dashboard()
    {
        $user = Auth::user();
        return View::make('student/dashboard',array('user'=>$user,'title'=>'Dashboard'));
    }
    public function pay_fees()
    {
        $user = Auth::user();
        return View::make('student/pay_fees',array('user'=>$user,'title'=>'Pay Fees'));
    }
    public function reports()
    {
        $user = Auth::user();
        return View::make('student/reports',array('user'=>$user,'title'=>'Statistics'));
    }
    public function calendar()
    {
        $user = Auth::user();
        return View::make('student/calendar',array('user'=>$user,'title'=>'Calendar'));
    }
    
    public function time_table()
    {
        $user = Auth::user();
        return View::make('student/time_table',array('user'=>$user,'title'=>'Time Table'));
    }
    public function profile()
    {
        $user = Auth::user();
        return View::make('student/profile',array('user'=>$user,'title'=>'Profile'));
    }
    
}
