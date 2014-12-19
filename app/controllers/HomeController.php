<?php

class HomeController extends BaseController {

    public function sign_in()
    {

        $member_id = Input::get('mem_id');
        $password = Input::get('pword');

        if(Auth::attempt(array('mem_id' => $member_id, 'password' => $password))){

            $role = Auth::user()->role;
            $redirect_url_names = array(
                'admin' => 'admin#dashboard',
                'teacher' => 'teacher#dashboard',
                'guardian' => 'guardian#dashboard',
                'student' => 'student#dashboard',
            );
            $route_name = $redirect_url_names[$role];
            return Redirect::route($route_name);

        }
        return Redirect::route('home')->with('message', 'Login Failed! Check ID or Password');
    }
    public  function  sign_out(){
        Auth::logout();
        return Redirect::route('home');
    }

}
