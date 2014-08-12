<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teachers extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model("Teacher",'teacher');
        if($this->session->userdata('role') == null) redirect('/');
        if($this->session->userdata('class') == null) $this->session->set_userdata(array('class'=>$this->teacher->get_class()));

    }
	public function index()
	{
        $data['action']= 'layout/actions';
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
	}

    public function enroll_stud()
    {
        if($this->input->post()){
            $this->teacher->enroll_stud();
            return;
        }
        $data['action']= 'teachers/enroll_stud';
        $data['student_population']= $this->teacher->student_population();
        $data['male_population']= $this->teacher->male_population();
        $data['female_population']= $this->teacher->female_population();

        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }
    public function view_timetable()
    {
        $data['action']= 'teachers/view_timetable';
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }
    public function get_timetable_pdf()
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
        $pdf -> write (13,'Kofi Dwomoh-Ababio');
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
        $pdf->Line(20, 45, 210-20, 45);



        $this->output->set_header('Content-type:application/pdf');
        $this->output->set_header('Content-Disposition:inline;filename = time_table.pdf ');
        $this->output->set_header('Accept-Ranges: bytes');
        $pdf -> output ('timetable.pdf','D');
    }
    public function send_notice()
    {
        $data['action']= 'teachers/send_notice';
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }
    public function calendar()
    {
        $data['action']= 'teachers/calendar';
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }
    public function incidents()
    {
        $data['action']= 'teachers/incidents';
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }
    public function view_report()
    {
        $data['action']= 'teachers/view_report';
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }

    public function add_test_results()
    {

        $data['action'] = 'teachers/add_test_results';
        $data['students'] = $this->teacher->get_students_taking_my_course();
        $data['subjects']= $this->teacher->get_subjects();
        $this->load->view('layout/header');
        $this->load->view('teachers/index',$data);
        $this->load->view('layout/footer');
    }
}

