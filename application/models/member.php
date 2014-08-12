<?php

class Member extends CI_Model{
    function __construct(){
        parent :: __construct();
        $this->load->library('session');


    }

    function authenticate(){
        $mem_id = $this->input->post('mem_id');
        $pword = $this->input->post('pword');
        $query = $this->db->get_where('members', array('mem_id' => $mem_id),1);
        if($query->num_rows() > 0){
            $member = $query->result();
            if ($member[0]->password == $pword){
                $this->session->set_userdata(array('name'=>$member[0]->oname,'role'=>$member[0]->role,'member_id'=>$mem_id));
                return array('status'=>'success','msg'=>'');

            }
        }


        return array('status'=>'failure','msg'=>'error message goes here');

    }
}