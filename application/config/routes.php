<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['sign_in'] = "members/sign_in";
$route['sign-out'] = "members/sign_out";
$route['students'] = "students";
$route['students/view-academic-record'] = "students/view_academic_record";
$route['students/view-finances'] = "students/view_finances";
$route['students/get-report-pdf'] = "students/get_academic_record_pdf";
$route['students/inbox'] = "students/inbox";
$route['parents'] = "parents";
$route['parents/view-ward-report'] = "parents/ward_report";
$route['parents/pay-ward-fees'] = "parents/pay_ward_fees";
$route['admins'] = "admins";
$route['teachers'] = "teachers";
$route['teachers/enroll-student']="teachers/enroll_stud";
$route['teachers/get-timetable']="teachers/get_timetable_pdf";
$route['teachers/view-timetable']="teachers/view_timetable";
$route['teachers/send-notice']="teachers/send_notice";
$route['teachers/calendar']="teachers/calendar";
$route['teachers/incidents']="teachers/incidents";
$route['teachers/view-report']="teachers/view_report";
$route['teachers/add-test-results']="teachers/add_test_results";
$route['accountants'] = "accountants";
$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */