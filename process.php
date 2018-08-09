<?php
require_once './library/config.php';
require_once './library/functions.php';
//session_start();
checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'search' :
		search();
	break;
	case 'addStd' :
		addStd1();
	break;
		
	case 'addStd21' :
		addStd2();
	break;
	case 'makeComplain' :
		makeComplain();
	break;
	
	case 'assignComplain' :
		assignComplain();
	break;
	
	case 'commentOnComplain' :
		commentOnComplain();
	break;
	
	case 'closeComplain' :
		closeComplain();
	break;
	//deleteCust
	case 'deleteEngg' :
		deleteEngg();
	break;

	case 'deleteDept' :
		deleteDept();
	break;
	
	case 'deleteCust' :
		deleteCust();
	break;
	
	case 'deleteStd' :
		deleteStud();
	break;
	
	case 'addEngg' :
		addEngg();
	break;

	case 'addDept' :
		addDept();
	break;

	case 'addCourses':
		addCourses();
	break;

	case 'addCourses_admin':
		addCourses_admin();
	break;
	
	case 'addCust' :
		addCust();
	break;

	case 'addGrade' :
		addGrade();
	break;
	
	case 'editStd' :
		editStud();
	break;
	
	case 'editEngg' :
		editEngg();
	break;

	case 'editDept' :
		editDept();
	break;
	case 'printRT' :
		printRTS();
	break;
	
	case 'selectPlan' :
		selectPlan();
	break;
	
	case 'editCust' :
		editCust();
	break;
	case 'finalForm1':
	final1st();
	break;
	case 'finalForm2':
	final2nd();
	break;
	case 'yearOneForm1':
	one1st();
	break;
	case 'yearOneForm2':
	one2nd();
	break;
	case 'yearTwoForm1':
	two1st();
	break;
	case 'yearTwoForm2':
	two2nd();
	break;
	case 'yearThreeForm1':
	three1st();
	break;
	case 'yearThreeForm2':
	three2nd();
	break;
	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}



function search()
{
	extract($_POST);
	$q =$_POST['q'];
	if(strlen($q) < 3){
    $resultmsg =  "Search Error</p><p>Keywords with less then three characters are omitted..." ;
	header("Location: view.php?mod=employee&view=search");
	}
	else
	header("Location: view.php?mod=employee&view=search1&q=$q");
	exit;
	
	
}


function final2nd()
{
	extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
	 			 $cis404 =$_POST['cis404'];
				 $cis412 =$_POST['cis412'];
				 $cis424 =$_POST['cis424'];
				 $cis454 =$_POST['cis454'];
				 $cis464 =$_POST['cis464'];				
				 $cis472 =$_POST['cis472'];
				 $cis422 =$_POST['cis422'];
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO final2nd (std_id,matric,cis404,cis412,cis424,cis454,cis464,cis472,cis422) 	VALUES('$std_id','$matric','$cis404','$cis412','$cis424','$cis454','$cis464','$cis472','$cis422')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=final2nd&Id=$std_id");
	header("Location:index.php");
	exit;	

	}
	else
	{//Update form
		$sql ="UPDATE final2nd
			SET  
				 cis404 ='$cis404',
				 cis412 ='$cis412',
				 cis424 ='$cis424',
				 cis454 ='$cis454',
				 cis464 ='$cis464',				
				 cis472 ='$cis472',
				 cis422 ='$cis422'			 
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: view.php?mod=employee&view=final2nd&Id=$std_id");
	header("Location:index.php");
	exit;				
	}	
}



function final1st()
{
	extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
	 			 $cis401 =$_POST['cis401'];
				 $cis405 =$_POST['cis405'];
				 $cis411 =$_POST['cis411'];
				 $cis415 =$_POST['cis415'];
				 $cis441 =$_POST['cis441'];				
				 $cis461 =$_POST['cis461'];
				 $cis471 =$_POST['cis471'];
				 $cis451 =$_POST['cis451'];
				 $cis400 =$_POST['cis400'];
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO final1st (std_id,matric,cis401,cis405,cis411,cis415,cis441,cis461,cis471,cis451,cis400) 	VALUES('$std_id','$matric','$cis401','$cis405','$cis411','$cis415','$cis441','$cis461','$cis471','$cis451','$cis400')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	// header("Location: view.php?mod=employee&view=final1st&Id=$std_id");
	header("Location: index.php");
	exit;	

	}
	else
	{//Update form
		$sql ="UPDATE final1st
			SET  
				 cis401 ='$cis401',
				 cis405 ='$cis405',
				 cis411 ='$cis411',
				 cis415 ='$cis415',
				 cis441 ='$cis441',				
				 cis461 ='$cis461',
				 cis471 ='$cis471',
				 cis451 ='$cis451',
				 cis400 ='$cis400'			 
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	// header("Location: view.php?mod=employee&view=final1st&Id=$std_id");
	header("Location: index.php");
	exit;				
	}	
}

function three2nd()
{
	extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
	 			 $cis372 =$_POST['cis372'];
				 $cis325 =$_POST['cis325'];
				 $cis322 =$_POST['cis322'];
				 $cis320 =$_POST['cis320'];
				 $cis324 =$_POST['cis324'];				
				 $cis362 =$_POST['cis362'];	 
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO yearthree2nd (std_id,matric,cis372,cis325,cis322,cis320,cis324,cis362) 	VALUES('$std_id','$matric','$cis372','$cis325','$cis322','$cis320','$cis324','$cis362')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=three2nd&Id=$std_id");
	header("Location: index.php");
	exit;	

	}
	else
	{//Update form
		$sql ="UPDATE yearthree2nd
			SET  
				 cis372 ='$cis372',
				 cis325 ='$cis325',
				 cis322 ='$cis322',
				 cis320 ='$cis320',
				 cis324 ='$cis324',				
				 cis362 ='$cis362'				 
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: view.php?mod=employee&view=three2nd&Id=$std_id");
	header("Location: index.php");
	exit;				
	}	
}
function three1st()
{
	extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
	 			 $cis371 =$_POST['cis371'];
				 $cis315 =$_POST['cis315'];
				 $cis321 =$_POST['cis321'];
				 $cis310 =$_POST['cis310'];
				 $cis323 =$_POST['cis323'];
				
				 $cis312 =$_POST['cis312'];
				 $cis373 =$_POST['cis373'];
				 $cis313 =$_POST['cis313'];
				 $cis361 =$_POST['cis361'];			 
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO yearthree1st (std_id,matric,cis371,cis315,cis321,cis310,cis323,cis312,cis373,cis313,cis361) 	VALUES('$std_id','$matric','$cis371','$cis315','$cis321','$cis310','$cis323','$cis312','$cis373','$cis313','$cis361')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=three1st&Id=$std_id");
	header("Location: index.php");
	exit;	

	}
	else
	{
		//Update form
		$sql ="UPDATE yearthree1st
			SET  
				 cis371 ='$cis371',
				 cis315 ='$cis315',
				 cis321 ='$cis321',
				 cis310 ='$cis310',
				 cis323 ='$cis323',			
				 cis312 ='$cis312',
				 cis373 ='$cis373',
				 cis313 ='$cis313',
				 cis361 ='$cis361'				 
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: view.php?mod=employee&view=three1st&Id=$std_id");
	header("Location: index.php");
	exit;	
	
		
	
	}
	
}


function two2nd()
{
	extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
	 			 $cis214 =$_POST['cis214'];
				 $cis262 =$_POST['cis262'];
				 $cis236 =$_POST['cis236'];
				 $cis232 =$_POST['cis232'];
				 $cis244 =$_POST['cis244'];
				 $cis242 =$_POST['cis242'];
				 $mth202 =$_POST['mth202'];
				 $mth205 =$_POST['mth205'];
				 $sta206 =$_POST['sta206'];
				 $cis268 =$_POST['cis268'];
				 $cis204 =$_POST['cis204'];				 
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO yeartwo2nd (std_id,matric,cis214,cis262,cis236,cis232,cis244,cis242,mth202,mth205,sta206,cis268,cis204) 	VALUES('$std_id','$matric','$cis214','$cis262','$cis236','$cis232','$cis244','$cis242','$mth202','$mth205','$sta206','$cis268','$cis204')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=two2nd&Id=$std_id");
	header("Location: index.php");
	exit;	
	
	}
	else
	{
		//Update form
		$sql ="UPDATE yeartwo2nd
			SET  
				 cis214 ='$cis214',
				 cis262 ='$cis262',
				 cis236 ='$cis236',
				 cis232 ='$cis232',
				 cis244 ='$cis244',
				 cis242 ='$cis242',
				 mth202 ='$mth202',
				 mth205 ='$mth205',
				 sta206 ='$sta206',
				 cis268 ='$cis268',
				 cis204 ='$cis204'				 
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: view.php?mod=employee&view=two2nd&Id=$std_id");
	header("Location: index.php");
	exit;	
	
		
	
	}
	
}


function two1st()
{
	extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
	 			 $cis213 =$_POST['cis213'];
				 $cis221 =$_POST['cis221'];
				 $cis201 =$_POST['cis201'];
				 $cis263 =$_POST['cis263'];
				 $cis261 =$_POST['cis261'];
				 $mth204 =$_POST['mth204'];
				 $mth207 =$_POST['mth207'];
				 $gss210 =$_POST['gss210'];
				 $gss208 =$_POST['gss208'];
				 $sta201 =$_POST['sta201'];
				 $cis265 =$_POST['cis265'];
				 $gss211 =$_POST['gss211'];
				 
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO yeartwo1st (std_id,matric,cis213,cis221,cis201,cis263,cis261,mth204,mth207,gss210,gss208,sta201,cis265,gss211) 	VALUES('$std_id','$matric','$cis213','$cis221','$cis201','$cis263','$cis261','$mth204','$mth207','$gss210','$gss208','$sta201','$cis265','$gss211')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=two1st&Id=$std_id");
	header("Location: index.php");
	exit;	
	
	}
	else
	{
		//Update form
		$sql ="UPDATE yeartwo1st
			SET  
				 cis213 ='$cis213',
				 cis221 ='$cis221',
				 cis201 ='$cis201',
				 cis263 ='$cis263',
				 cis261 ='$cis261',
				 mth204 ='$mth204',
				 mth207 ='$mth207',
				 gss210 ='$gss210',
				 gss208 ='$gss208',
				 sta201 ='$sta201',
				 cis265 ='$cis265',
				 gss211 ='$gss211'				 
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=two1st&Id=$std_id");
	header("Location: index.php");
	exit;	
		
	
	}
	
}

function one1st()
{
	extract($_POST);
	$std_id =$_POST['id'];
	$matric =$_POST['matric'];
	
	$gss101 =$_POST['gss101'];
	$phy101 =$_POST['phy101'];
	$gss103 =$_POST['gss103'];
	$mth131 =$_POST['mth131'];
	$chm101 =$_POST['chm101'];
	$cis101 =$_POST['cis101'];
	$mth111 =$_POST['mth111'];
	$bio151 =$_POST['bio151'];
	$phy191 =$_POST['phy191'];
	$sta111 =$_POST['sta111'];
	$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO yearone1st (std_id,matric,gss101,phy101,gss103,mth131,chm101,cis101,mth111,bio151,phy191,sta111) 	VALUES('$std_id','$matric','$gss101','$phy101','$gss103','$mth131','$chm101','$cis101','$mth111','$bio151','$phy191','$sta111')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=one1st&Id=$std_id");
	header("Location: index.php");
	exit;	
	
	}
	else
	{
		//Update form
		$sql ="UPDATE yearone1st
			SET  
				gss101 ='$gss101',
				phy101 ='$phy101',
				gss103 ='$gss103',
				mth131 ='$mth131',
				chm101 ='$chm101',
				cis101 ='$cis101',
				 mth111 ='$mth111',
				 bio151 ='$bio151',
				 phy191 ='$phy191',
				 sta111 ='$sta111'
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=one1st&Id=$std_id");
	header("Location: index.php");
	exit;	
	
	}
	
}



function one2nd()
{	
			extract($_POST);
				$std_id =$_POST['id'];
				$matric =$_POST['matric'];
	
				 $phy192 =$_POST['phy192'];
				 $phy102 =$_POST['phy102'];
				 $mth112 =$_POST['mth112'];
				 $gss102 =$_POST['gss102'];
				 $cis102 =$_POST['cis102'];
				 $sta112 =$_POST['sta112'];
				 $cis192 =$_POST['cis192'];
				 $mth113=$_POST['mth113'];
				 $cis104 =$_POST['cis104'];
				 $gss108 =$_POST['gss108'];
				 $gss107 =$_POST['gss107'];
				$type =$_POST['type'];
	
	if($type == "submits")
	{
		//Post form
		$sql = "INSERT INTO yearone2nd (std_id,matric,phy192,phy102,mth112,gss102,cis102,sta112,cis192,mth113,cis104,gss108,gss107) 	VALUES
		('$std_id','$matric','$phy192','$phy102','$mth112','$gss102','$cis102','$sta112','$cis192','$mth113','$cis104','$gss108','$gss107')";
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location: view.php?mod=employee&view=one2nd&Id=$std_id");
	header("Location: index.php");
	exit;	
	
	}
	else
	{
		//Update form
		$sql ="UPDATE yearone2nd
			SET  
				phy192 ='$phy192',
				phy102 ='$phy102',
				mth112 ='$mth112',
				gss102 ='$gss102',
				cis102 ='$cis102',
				sta112 ='$sta112',
				cis192 ='$cis192',
				mth113 ='$mth113',
				cis104 ='$cis104',
				gss108 ='$gss108',
				gss107 ='$gss107'
				
			WHERE std_id= $std_id";	
			
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	//header("Location:  view.php?mod=employee&view=one2nd&Id=$std_id");
	header("Location: index.php");
	exit;	
	
	}
	
}


function addStd1()
{	
	//echo 'ADD STUDENT STEP ONE';
	
extract($_POST);
$name=$_POST['name'];
$matric=$_POST['matric'];
$jamb=$_POST['jamb'];
$email=$_POST['email'];
$password=$_POST['password'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$address =$_POST['address'];
$lga=$_POST['lga'];
$town=$_POST['town'];
$state=$_POST['state'];
$nat=$_POST['nat'];
$mobile=$_POST['mobile'];
$programType=$_POST['programType'];
$course=$_POST['dept'];
$religion=$_POST['religion'];
$year =$_POST['year'];
$status =$_POST['status'];
		
	$_SESSION['matric']= $matric;
	
	$sql = "INSERT INTO std (id, name,matric,jamb,email,password,sex,dob,address,lga,town,state,nat,mobile,year,programType,dept,religion,status,date_time)		   				      		VALUES(null,'$name','$matric','$jamb', '$email','$password', '$sex','$dob','$address','$lga','$town','$state','$nat','$mobile','$year','$programType','$dept','$religion','$status',NOW())";
	
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=vSDetails");	
	exit;	
}
	
function addEngg()
{
	//echo 'Make Complain...';
    $EngineerName = $_POST['EngineerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	
	$sql = "INSERT INTO tbl_engineer (ename, epass, address, email, e_mobile, date_time) 
			VALUES ('$EngineerName', '$Password', '$Address', '$Email', '$Mobile', NOW())";
		
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=enggDetails");	
	exit;	
}

function addDept()
{
	//echo 'Make Complain...';
	$department = $_POST['department'];
	
	$sql = "INSERT INTO department (id, name) 
			VALUES (null, '$department')";
		
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=deptDetails");	
	exit;	
}

function addCourses()
{	
	 $loop = $_POST['loop'];
	 $matric = $_SESSION['matric'];
	 //print_r($_POST); exit();
	for ($i=1; $i<=$loop; $i++) {
		$id = $_POST['course_'.$i];
		$sql = "INSERT INTO students_courses VALUES (null, $id, $matric)";
		$result = dbQuery($sql);
		//$sql2 = "INSERT INTO results (id, std_id, students_courses_id, matric, score, grade, points) VALUES (null, '', $id, $matric, '', '', '')";
		//$result2 = dbQuery($sql2);
	}
	$_SESSION['msg'] = 'Courses added successfully';		
	header("Location: view.php?mod=student&view=regCourses");	
	 exit;
}

function addGrade() {
	$std_id = $_POST['std_id'];
	$matric = $_POST['matric'];
	$loop = $_POST['loop'];
	$pointForA = 4;
	$pointForB = 3;
	$pointForC = 2;
	$pointForD = 1;
	//print_r($_POST); exit();
	for ($i=1; $i<$loop; $i++) {
		$courses_id = $_POST['courses_id_'.$i];
		$score = $_POST['score_'.$i];
		$units = $_POST['units_'.$i];
		if ($score >= 70) {
			$grade = 'A';
			$points = $units*$pointForA;
		}
		else if ($score >= 60) {
			$grade = 'B';
			$points = $units*$pointForB;
		}
		else if ($score >= 50) {
			$grade = 'C';
			$points = $units*$pointForC;
		}
		else {
			$grade = 'D';
			$points = $units*$pointForD;
		}//results stops at id = 92
		// $sql = "UPDATE results SET score = '$score', grade = '$grade', points = '$points', std_id = '$std_id' WHERE  students_courses_id = '$courses_id' AND matric = '$matric'";
		$sql = "INSERT INTO results (id, std_id, students_courses_id, matric, score, grade, points) VALUES (null, '$std_id', '$courses_id', '$matric', '$score', '$grade', '$points')";
		$result = dbQuery($sql);
		if (($result)) {
			//echo "Success"; }
		header("Location: view.php?mod=employee&view=vSDetails");}
		else {
			echo "An erro";
		}
	}
}

function addCourses_admin() {

	$loop = $_POST['loop'];
	for ($i=1; $i<=$loop; $i++) {
		$dept = $_POST['dept_id'];
		$name = $_POST['name_'.$i];
		$level = $_POST['level'];
		$sems = $_POST['sems'];
		$units = $_POST['units_'.$i];
		$sql = "INSERT INTO courses VALUES (null, '$dept', '$name', $units, '$level', '$sems')";
		$result = dbQuery($sql);
	}
	$_SESSION['msg'] = 'Courses added successfully';
	header("Location: view.php?mod=admin&view=addCourses");	
	exit;
}

function deleteEngg()
{
	//echo 'Add Comment on Complain...';
    $eId = $_GET['eId'];
	//$empComment = $_POST['empComment'];
	$sql = "DELETE FROM tbl_engineer 
				WHERE eid = $eId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=enggDetails");	
	exit;	
}

function deleteDept()
{
	//echo 'Add Comment on Complain...';
    $eId = $_GET['eId'];
	//$empComment = $_POST['empComment'];
	$sql = "DELETE FROM department 
				WHERE id = $eId";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=deptDetails");	
	exit;	
}

function deleteStud()
{
    $id = $_GET['Id'];
	$sql = "DELETE FROM std 
				WHERE id = $id";	
	$result = dbQuery($sql);
	header("Location: view.php?mod=admin&view=vSDetails");	
	exit;	
}

function editEngg()
{
	//echo 'Make Complain...';
    $eid = $_POST['eid'];
	$EngineerName = $_POST['EngineerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$Mobile = $_POST['Mobile'];
	
	$sql = "UPDATE tbl_engineer 
			SET ename = '$EngineerName', 
				epass = '$Password', 
				address = '$Address', 
				email = '$Email', 
				e_mobile = '$Mobile'
			WHERE eid = $eid"; 	
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=enggDetails");	
	exit;	
}

function editDept()
{
	//echo 'Make Complain...';
    $id = $_POST['id'];
	$name = $_POST['department'];
	print_r($_POST);
	
	$sql = "UPDATE department 
			SET name = '$name'
			WHERE id = '$id'"; 	
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=deptDetails");	
	exit;	
}
 
function editStud()
{
	//echo 'Make Complain...';
  extract($_POST);
$name=$_POST['name'];
$matric=$_POST['matric'];
$jamb=$_POST['jamb'];
$email=$_POST['email'];
$password=$_POST['password'];
$sex=$_POST['sex'];
$dob=$_POST['dob'];
$address =$_POST['address'];
$lga=$_POST['lga'];
$town=$_POST['town'];
$state=$_POST['state'];
$nat=$_POST['nat'];
$mobile=$_POST['mobile'];
$programType=$_POST['programType'];
$course=$_POST['dept'];
$religion=$_POST['religion'];
$id =$_POST['id'];
$year =$_POST['year'];
$status =$_POST['status'];

	$sql = "UPDATE std 
			SET name ='$name',
				matric ='$matric',
				jamb ='$jamb',
				email ='$email',
				password ='$password',
				sex ='$sex',
				dob ='$dob',
				address ='$address',
				lga ='$lga',
				town ='$town',
				state ='$state',
				nat ='$nat',
				mobile ='$mobile',
				year ='$year',
				programType ='$programType',
				dept ='$dept',
				status ='$status',
				date_time = NOW(),
				religion ='$religion'
			WHERE id = $id"; 	
	$result = dbQuery($sql);
	//header("Location: index.php?view=bal&error=" . urlencode("$data"));	
	header("Location: view.php?mod=admin&view=vSDetails");	
	exit;	
}


function printRTS()
{
	//echo 'Add Comment on Complain...';

    $num = $_POST['num'];
	$_SESSION['nums'] =$num;
		header("Location: view.php?mod=admin&view=viewReceipt");	
	exit;	
}


?>