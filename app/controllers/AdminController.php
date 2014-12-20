<?php

class AdminController extends BaseController {


    public function dashboard()
    {
        $user = Auth::user();
        return View::make('admin/dashboard',array('user'=>$user,'title'=>'dashboard'));
    }
    public function enroll_student()
    {
        $user = Auth::user();
        $data = array();


        if (Request::isMethod('post'))
        {
            
            $full_name = Input::get('fname').' '.Input::get('oname').' '.Input::get('lname');
            $dob = Input::get('year').'-'.Input::get('mon').'-'.Input::get('day');
            $sphone = Input::get('sphone');
            $semail = Input::get('semail');
            $snationality = Input::get('snationality');

            

            $sgender = Input::get('sgender');
            $gfull_name = Input::get('gfname');
            $grelation = Input::get('grelation');
            $gsrelation = Input::get('gsrelation');
            $gphone = Input::get('gphone');
            $gemail = Input::get('gemail');
            $gavatar = Input::file('gphoto');
            $selected_parent = Input::get('selected_parent');
            $admitted_to = Input::get('admitted_to');
            
            #generate memeber id
            $mem_id = AdminController::generate_mem_id();

            #image processing
            $savatar = Input::file('sphoto');
            $filename = $mem_id.'_avatar.'.$savatar->getClientOriginalExtension();
            $savatar->move(public_path().'/avatars',$filename );

            #assign user details
            $new_user = new User();
            $new_user->role = 'student';
            $new_user->name = $full_name;
            $new_user->dob = $dob;
            $new_user->phone = $sphone;
            $new_user->email = $semail;
            $new_user->nationality = $snationality;
            $new_user->gender = $sgender;
            $new_user->avatar = $filename;
            $new_user->mem_id = $mem_id;
            $new_user->password = AdminController::generate_mem_password();

            #assign student details
            $new_student = new Student();
            $new_student->mem_id = $mem_id;
            $new_student->class = $admitted_to;


            #save model
            $new_user->save();
            $new_student->save();
            

            $data = array_merge($data,array('message'=>"<p class='alert alert-success' >Student has been enrolled successfully.</p>")) ;

            //var_dump($full_name,$dob,$sphone,$semail,$snationality,$savatar,$sgender,$gfull_name,$grelation,$gsrelation,$gphone,$gemail,$gavatar,$selected_parent);
            //$prev_school = Input::get('prev_school');
            //$prev_school_level = Input::get('prev_school_level');
        }
        $parents = Guardian::get_all();
        $num_of_boys = Student::num_of_boys();
        $num_of_girls = Student::num_of_girls();
        $data = array_merge($data,array('user'=>$user,'parents'=>$parents,'num_of_boys'=>$num_of_boys,'num_of_girls'=>$num_of_girls,'title'=>'Enroll Student')) ;
        
        
        return View::make('admin/enroll_student', $data);
    }
    public function reports()
    {
        $user = Auth::user();
        return View::make('admin/reports',array('user'=>$user,'title'=>'Statistics'));
    }
    public function calendar()
    {
        $user = Auth::user();
        return View::make('admin/calendar',array('user'=>$user,'title'=>'Calendar'));
    }
    public function incidents()
    {
        $user = Auth::user();
        return View::make('admin/incidents',array('user'=>$user,'title'=>'Incidents'));
    }
    public function notifications()
    {
        $user = Auth::user();
        return View::make('admin/notifications',array('user'=>$user,'title'=>'Notifications'));
    }
    public function profile()
    {
        $user = Auth::user();
        return View::make('admin/profile',array('user'=>$user,'title'=>'Profile'));
    }

    private static function generate_mem_id()
    {
        return 'taichobee';
    }
    private static function generate_mem_password()
    {
        return Hash::make('232311');
    }
}
