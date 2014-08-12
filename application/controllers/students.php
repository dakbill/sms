<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        if($this->session->userdata('role') == null) redirect('/');
    }
    
	public function index()
	{
        $data['action'] = 'layout/actions';
        $this->load->view('layout/header');
        $this->load->view('students/index',$data);
        $this->load->view('layout/footer');
	}
    public function view_academic_record()
	{
        $data['action'] = 'students/acc_record';
        $this->load->view('layout/header');
        $this->load->view('students/index',$data);
        $this->load->view('layout/footer');
	}
    public function get_academic_record_pdf()
    {
        define('FPDF_FONTPATH',APPPATH .'plugins/fpdf/font/');
        require(APPPATH .'plugins/fpdf/fpdf.php');
        $pdf = new FPDF('p','mm','A4');
        $pdf -> AddPage();
        $pdf->SetFont('Arial','',14);
        $pdf -> write (10,'Report Card');
        $pdf -> write (10,' hello world');
        $this->output->set_header('Content-type:application/pdf');
        $this->output->set_header('Content-Disposition:inline;filename = acc_today.pdf ');
        $this->output->set_header('Accept-Ranges: bytes');
        $pdf -> output ('acc_today.pdf','D');


    }
    public function view_finances()
	{
        $data['action'] = 'students/finances';
        $this->load->view('layout/header');
        $this->load->view('students/index',$data);
        $this->load->view('layout/footer');
	}
    public function inbox()
	{
        $data['action'] = 'students/notifications';
        $this->load->view('layout/header');
        $this->load->view('students/index',$data);
        $this->load->view('layout/footer');
	}
}

