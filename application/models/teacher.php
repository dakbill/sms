<?php

class Teacher extends CI_Model{
    function get_report_of_student(){

    }

    function get_students_taking_my_course(){
        $teacher_member_id = $this->session->userdata('member_id');
        if($this->input->get('subject') != null){
            $subject_id = $this->input->get('subject');
            $query = $this->db->query("select * from teachers_has_subject join students_has_subject on teachers_has_subject.subject_id = students_has_subject.subject_id join subject on subject.id = students_has_subject.subject_id where teachers_members_mem_id = '$teacher_member_id' and subject.id= '$subject_id' ");
        }
        else {$query = $this->db->query("select * from teachers_has_subject join students_has_subject on teachers_has_subject.subject_id = students_has_subject.subject_id join subject on subject.id = students_has_subject.subject_id where teachers_members_mem_id = '$teacher_member_id' ");}
        return $query->result();
    }
    function student_population(){
        $query = $this->db->query("select count(*) as count from students");
        return $query->result()[0];
    }
    function male_population(){
        $query = $this->db->query("select count(*) as count from students where gender = 'm'");
        return $query->result()[0];
    }
    function female_population(){
        $query = $this->db->query("select count(*) as count from students where gender = 'f' ");
        return $query->result()[0];
    }



    function get_class(){
        $teacher_member_id = $this->session->userdata('member_id');
        $query = $this->db->query("select * from teachers where members_mem_id = '$teacher_member_id'");
        return $query->result()[0]->class;


    
    }
    function get_subjects(){
        $teacher_member_id = $this->session->userdata('member_id');
        $query = $this->db->query("select  * from teachers join teachers_has_subject on(teachers.id = teachers_id) join subject on (subject.id = teachers_has_subject.subject_id) where members_mem_id = '$teacher_member_id'");
        return $query->result();



    }

     function enroll_stud()
    {
        $member_id = $this->generate_student_id();
        $password = $this->generate_pass($member_id);
        $fname = $this->input->post('fname').' '.$this->input->post('oname');
        $lname = $this->input->post('lname');
        $date_array = explode('/',$this->input->post('dob'));
        $dob = $date_array[2].'-'.$date_array[0].'-'.$date_array[1];
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $class = $this->input->post('class');
        $gender = $this->input->post('gender');
        $photo = $this->input->post('photo');
        $nationality = $this->input->post('nationality');
        $gfname = $this->input->post('guardian');
        $glname = $this->input->post('guardian');
        $relation = $this->input->post('relation');
        $gphone = $this->input->post('gphone');
        $gemail = $this->input->post('gemail');
        //$other_school_level = $this->input->post('sch_level');
        $this->db->query("insert into members (mem_id,password,phone,email,role,oname,lname) values ('$member_id','$password','$phone','$email','students','$fname','$lname')");
        $this->db->query("insert into students (members_mem_id,class,nationality,dob,gender,image) values ('$member_id','$class','$nationality','$dob','$gender','.png')");
        if ($gfname != null){
            $parent_id = $this->generate_parent_id();
            $password = $this->generate_pass($parent_id);
            $this->db->query("insert into members (mem_id,password,phone,email,role,oname,lname) values ('$parent_id','$password','$gphone','$gemail','parents','$gfname','$glname')");
            $this->db->query("insert into parents (members_mem_id,class,nationality,dob,gender,image) values ('$parent_id','$class','$nationality','$dob','$gender','.png')");
        }

        echo var_dump($this->input->post());


        
    }




    function create_class_calander(){
        //the teacher should a class calander containing class activities for the term...
    }

    private function generate_student_id(){
        return 'vader';
    }
    private function generate_pass($member_id){
        return $member_id.'1234';
    }
    private function generate_parent_id(){
        return 'parent';
    }


}