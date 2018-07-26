<?php
require_once './library/config.php';
require_once './library/functions.php';

//$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$mod = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

if($mod == 'customer'){
	switch ($view) { 
	
		case 'makeComplain' :
			$content 	= 'makeComplain.php';		
			$pageTitle 	= 'Complain Management System - Make Complains';
		break;
		
		case 'selectPlans' :
			$content 	= 'selectPlans.php';		
			$pageTitle 	= 'Complain Management System - Select Plans';
		break;
		
		case 'compDetails' :
			$content 	= 'compDetails.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'feedback' :
			$content 	= 'feedback.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
		case 'planExist' :
			$content 	= 'planExist.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
		case 'planSuccess' :
			$content 	= 'planSuccess.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
	
	}//switch
}//if
elseif($mod == 'admin'){
	switch ($view) {
		case 'stdReg':
			 $content 	= 'stdRegistration.php';		
			$pageTitle 	= 'Result Management System: Student Registration';
		break;
		case 'stdStep':
			 $content 	= 'stdPreview.php';		
			$pageTitle 	= 'Result Management System: Student Preview';
		break;
		case 'stdPreview':
			 $content 	= 'stdPreview.php';		
			$pageTitle 	= 'Management System: Preview';
		break;
			
		case 'compDetails' :
			$content 	= 'adminCompDetails.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'printRecipts' :
			$content 	= 'print.php';		
			$pageTitle 	= 'Management System-Print System';
		break;
		case 'viewReceipt' :
			$content 	= 'printPage.php';		
			$pageTitle 	= 'Print System';
		break;
		
		case 'repo' :
			$content 	= 'repo.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'repod' :
			$content 	= 'repo-detail.php';		
			$pageTitle 	= 'Complain Management System - Detail Reports';
		break;
		
		case 'vDetails' :
			$content 	= 'viewEnggDetails.php';		
			$pageTitle 	= 'Complain Management System - View Engineer Details';
		break;
		case 'vSDetails' :
			$content 	= 'stdDetails.php';		
			$pageTitle 	= 'Student Details - ';
		break;
		
		case 'enggDetails' :
			$content 	= 'enggDetails.php';		
			$pageTitle 	= 'Complain Management System - View Engineer Details';
		break;
		case 'stdDetails' :
			$content 	= 'stdDetails.php';		
			$pageTitle 	= 'Management System - View Students Details';
		break;
			
		case 'viewByCompID' :
			$content 	= 'viewByCompID.php';		
			$pageTitle 	= 'Complain Management System - Give Your Complains';
		break;
		
		case 'doEdit' :
			$content 	= 'editEngg.php';		
			$pageTitle 	= 'Complain Management System - Edit Engineer';
		break;
		
		case 'doEditStd' :
			$content 	= 'editStd.php';		
			$pageTitle 	= 'Management System - Edit Student';
		break;		
		case 'doEditCust' :
			$content 	= 'editCust.php';		
			$pageTitle 	= 'Management System - Edit Customer';
		break;
		
		case 'addEngg' :
			$content 	= 'addEngg.php';		
			$pageTitle 	= 'Complain Management System - Edit Engineer';
		break;

		case 'addDept' :
			$content 	= 'addDept.php';		
			$pageTitle 	= 'Complain Management System - Edit Engineer';
		break;

		case 'deptDetails' :
			$content 	= 'deptDetails.php';		
			$pageTitle 	= 'Complain Management System - Edit Engineer';
		break;
		
		
	}//switch
}//if
elseif($mod == 'employee'){
	switch ($view) {
		case 'search1':
				$content 	= 'search1.php';
			$pageTitle 	= 'Student Allocation System: Search Window';
		break;
		
		case 'search':
				$content 	= 'search.php';		
			$pageTitle 	= 'Student Allocation System: Search Window';
		break;
		
		case 'printDetail':
				$content 	= 'printDetail.php';		
			$pageTitle 	= 'Result System-Print Details';
		break;
		
				
		case 'query' :
			$content 	= 'query.php';		
			$pageTitle 	= 'Result System - Query Details';
		break;
		
		
		case 'viewComplain' :
			$content 	= 'employeeCompDetails.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'viewComplainClose' :
			$content 	= 'employeeCompClose.php';		
			$pageTitle 	= 'Complain Management System - View Complains Detail';
		break;
		
		case 'viewByCompID' :
			$content 	= 'empViewByCompID.php';		
			$pageTitle 	= 'Complain Management System - View Complains / Add Comment';
		break;
		
		case 'closeComplain' :
			$content 	= 'closeComplain.php';		
			$pageTitle 	= 'Complain Management System - Close complain';
		break;

		case 'resultCheck' :
			$content 	= 'resultCheck_new.php';		
			$pageTitle 	= 'Complain Management System - Close complain';
		break;

		case 'resultPageS_employee' :
			$content 	= 'resultPageS_employee.php';		
			$pageTitle 	= 'Complain Management System - Close complain';
		break;

		case 'vSDetails' :
			$content 	= 'stdDetails_employee.php';		
			$pageTitle 	= 'Student Details - ';
		break;

	}//switch
}//if
elseif ($mod == 'student') {
	switch($view) {
		case 'checkResult';
		$content = 'check_result.php';
		break;

		case 'regCourses':
		$content = 'register_courses.php';
		break;
	}
}

require_once './include/template.php';

?>
