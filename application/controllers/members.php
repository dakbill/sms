<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model("Member",'member');
        $this->load->library('session');
    }

	public function sign_in()
	{
        if($this->input->post()){
            $auth = $this->member->authenticate();
            if($auth['status'] == 'success'){
                switch($this->session->userdata('role')){
                    case 'admins':
                        redirect('/admins');
                        break;
                    case 'parents':
                        redirect('/parents');
                        break;
                    case 'accountant':
                        redirect('/accountants');
                        break;
                    case 'students':
                        redirect('/students');
                        break;
                    case 'teachers':
                        redirect('/teachers');
                        break;
                }
                return;
            }
            $data['auth'] = $auth;
            $this->load->view('layout/header');
            $this->load->view('home/index',$data);
            $this->load->view('layout/footer');
            return;
        }
        redirect('/home');


	}
	public function sign_out()
	{
        $this->session->sess_destroy();
        redirect('/');


	}
}

