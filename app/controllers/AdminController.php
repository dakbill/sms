<?php

class AdminController extends BaseController {


    public function dashboard()
    {
        $user = Auth::user();
        return View::make('admin/dashboard',array('user'=>$user,'title'=>'dashboard'));
    }
    public function new_member_details()
    {
        $user = Auth::user();
        return View::make('admin/new_member_details',array('user'=>$user,'title'=>'New Member Details'));
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
            
            #generate member id and password
            $mem_id = AdminController::generate_student_id();
            $password = AdminController::generate_mem_password();

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
            $password = AdminController::generate_mem_password();
            $new_user->password = Hash::make($password);

            #assign student details
            $new_student = new Student();
            $new_student->mem_id = $mem_id;
            $new_student->class = $admitted_to;


            #save model
            $new_user->save();
            $new_student->save();
            

            $data = array_merge($data,array("title" => 'New Member Details','user'=>$user,"mem_id"=>$mem_id,"password"=>$password )) ;
            $data = array_merge($data,array("button" => '<a href="'.URL::route('admin#enroll-student').'" class="btn btn-primary">Enroll Another Student</a>')) ;
            return View::make('admin/new_member_details', $data);

            

            //var_dump($full_name,$dob,$sphone,$semail,$snationality,$savatar,$sgender,$gfull_name,$grelation,$gsrelation,$gphone,$gemail,$gavatar,$selected_parent);
            //$prev_school = Input::get('prev_school');
            //$prev_school_level = Input::get('prev_school_level');
        }
        $parents = Guardian::get_all();
        $pop_by_gender = Student::population_by_gender();
        $num_of_boys = 0;
        $num_of_girls = 0;
        foreach ($pop_by_gender as $pop) {
            if($pop->gender == 'male')
                $num_of_boys = $pop->gender_count;        
            else if ($pop->gender == 'female')
                $num_of_girls = $pop->gender_count;
        }
        $data = array_merge($data,array('user'=>$user,'parents'=>$parents,'num_of_boys'=>$num_of_boys,'num_of_girls'=>$num_of_girls,'title'=>'Enroll Student')) ;
        #redirect to student detail page
        
        
        return View::make('admin/enroll_student', $data);
    }
     public function enroll_teacher()
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
            $admitted_to = Input::get('admitted_to');
            
            #generate member id and password
            $mem_id = AdminController::generate_teacher_id();
            $password = AdminController::generate_mem_password();

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
            
            $new_user->password = Hash::make($password);

            
            #assign teacher details
            $new_teacher = new Teacher();
            $new_teacher->mem_id = $mem_id;
            $new_teacher->class = $admitted_to;


            #save model
            $new_user->save();
            $new_teacher->save();
            

            $data = array_merge($data,array("title" => 'New Member Details','user'=>$user,"mem_id"=>$mem_id,"password"=>$password )) ;
            $data = array_merge($data,array("button" => '<a href="'.URL::route('admin#enroll-teacher').'" class="btn btn-primary">Enroll Another Teacher</a>')) ;
            return View::make('admin/new_member_details', $data);

        }
        $pop_by_gender = Teacher::population_by_gender();
        $num_of_boys = 0;
        $num_of_girls = 0;
        foreach ($pop_by_gender as $pop) {
            if($pop->gender == 'male')
                $num_of_boys = $pop->gender_count;        
            else if ($pop->gender == 'female')
                $num_of_girls = $pop->gender_count;
        }
        
        $data = array_merge($data,array('user'=>$user,'num_of_boys'=>$num_of_boys,'num_of_girls'=>$num_of_girls,'title'=>'Enroll Teacher')) ;
        
        
        return View::make('admin/enroll_teacher', $data);
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

    private static function generate_student_id()
    {
        return 'taichobe';
    }
    private static function generate_teacher_id()
    {
        return 'taichobe';
    }
    private static function generate_mem_password()
    {
        return '232311';
    }
}
