<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        if($this->session->userdata('role') == null) redirect('/');
    }
    
	public function index()
	{
        $this->load->view('layout/header');
        $this->load->view('admins/index');
        $this->load->view('layout/footer');
	}
}

