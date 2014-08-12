<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parents extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        if($this->session->userdata('role') == null) redirect('/');
    }
    
	public function index()
	{
        $data['action']= 'layout/actions';
        $this->load->view('layout/header');
        $this->load->view('parents/index',$data);
        $this->load->view('layout/footer');
	}
    public function ward_report()
	{
        $data['action']= 'parents/ward_report';
        $this->load->view('layout/header');
        $this->load->view('parents/index',$data);
        $this->load->view('layout/footer');
	}
    public function pay_ward_fees()
	{
        $data['action']= 'parents/pay_ward_fees';
        $this->load->view('layout/header');
        $this->load->view('parents/index',$data);
        $this->load->view('layout/footer');
	}
}

