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
        $pdf->SetFont('Arial','B',14);

        $pdf->Ln(0);
        $pdf->SetX(80);
        $pdf -> write (20,'Academic Record');
        $pdf->Ln(10);
        $pdf->SetX(4);
        $pdf -> write (13,'Student Number: ');
        $pdf->SetFont('Arial','',14);
        $pdf -> write (13,'10346353');
        $pdf->SetX(-68);
        $pdf->SetFont('Arial','B',14);
        $pdf -> write (13,'Date of Birth: ');
        $pdf->SetFont('Arial','',14);
        $pdf -> write (13,date('d-M-y'));
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',14);
        $pdf->SetX(30);
        $pdf -> write (13,'Name: ');
        $pdf->SetFont('Arial','',14);
        $pdf -> write (13,'KOFI DWOMOH-ABABIO');
        $pdf->SetX(-47);
        $pdf->SetFont('Arial','B',14);
        $pdf -> write (13,'Sex: ');
        $pdf->SetFont('Arial','',14);
        $pdf -> write (13,'Male');
        $pdf->Ln(10);
        $pdf->SetX(-68);
        $pdf->SetFont('Arial','B',14);
        $pdf -> write (13,'Date Printed: ');
        $pdf->SetFont('Arial','',14);
        $pdf -> write (13,date('d-M-y'));
        $pdf->Ln(80);
        $pdf->Line(5, 55, 210-5, 55);



        $this->output->set_header('Content-type:application/pdf');
        $this->output->set_header('Content-Disposition:inline;filename = time_table.pdf ');
        $this->output->set_header('Accept-Ranges: bytes');
        $pdf -> output ('timetable.pdf','D');
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

