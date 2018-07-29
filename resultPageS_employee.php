<?php
require_once 'library/database.php';
require_once 'library/functions.php';

?>
<html>
<head>
<title>Result Management System- Transcript</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="include/admin.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>include/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script> 
        <script type="text/javascript" src="js/jquery.validate.js"></script> 
		 <script type="text/javascript" src="js/jquery.form.js"></script> 

<style type="text/css">

    #printable { display: block; }

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }
    }
    </style>
	
    <script type="text/javascript">
    	function check(){
						window.print();
		}
    </script>
</head>
<body>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/complains.jpg" width="1200" height="120"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="1200" border="0" cellspacing="0.5" cellpadding="10">
  <tr id="entryTableHeader"> 
         <td><h3>:: Print Result ::: <a href="<?php echo WEB_ROOT; ?>index_staff.php">Home</a>&nbsp;&nbsp;<a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=resultCheck">Go Back</a>
          <div align="center" id="non-printable"><a href="#" onClick="return check()">Print Table</a></div></h3></td>
        </tr>
    <tr> 
     <td class="contentArea"> 
     <!-- Content Area begings here     -->
      <?php
	//   extract($_POST);
	   $matric =$_POST['matric'];
	   
	// // $sql = "SELECT * FROM std WHERE matric =$matric";
	// // $result = dbQuery($sql);
	// // while($row = dbFetchAssoc($result)) {
	// // extract($row);
	// // 	$name =$row['name'];
	// // 	$matric =$row['matric'];
	// // 	$jamb =$row['jamb'];
	// // 	$sex =$row['sex'];
	// // 	$dob =$row['dob'];
	// // 	$address =$row['address'];
	// // 	$lga =$row['lga'];
	// // 	$town =$row['town'];
	// // 	$state =$row['state'];
	// // 	$nat =$row['nat'];
	// // 	$mobile=$row['mobile'];
	// // 	$programType =$row['programType'];
	// // 	$course =$row['dept'];
	// // 	$religion =$row['religion'];
	// // 	$year =$row['year'];
	// // }
  $sql = "SELECT *, std.name AS studentName, courses.name AS courseName, department.name as departmentName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE std.matric = '$matric'";
  // $sql = "SELECT *, std.name AS studentName, courses.name AS courseName, department.name as departmentName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE std.matric = '$matric'";
  $resultMain = dbQuery($sql);
	while($row = dbFetchAssoc($resultMain)) {
	extract($row);
		$name =$row['studentName'];
		$matric =$row['matric'];
		$jamb =$row['jamb'];
		$sex =$row['sex'];
		$dob =$row['dob'];
		$address =$row['address'];
		$lga =$row['lga'];
		$town =$row['town'];
		$state =$row['state'];
		$nat =$row['nat'];
		$mobile=$row['mobile'];
		$programType =$row['programType'];
		$dept =$row['departmentName'];
		$religion =$row['religion'];
    $year =$row['year'];
    $coursesName = $row['courseName'];
	}
	?>
      <div id="printable">
     <table border="1" width="1190"cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td colspan="21" align="center">&nbsp;<h1><?php echo $name; ?></h1></td>
  </tr>
  <tr>
    <td colspan="21" align="center">&nbsp; Student Transcript</td>

  </tr>
  <tr>
    <td  colspan="3">&nbsp;Name</td>
    <td  colspan="5">&nbsp;<?php echo $name; ?></td>
    <td  colspan="3">&nbsp;Phone No.</td>
    <td colspan="3">&nbsp;<?php echo $mobile;?></td>
    
    <td colspan="3">&nbsp;LGA</td>
    <td colspan="4">&nbsp;<?php echo $lga; ?></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;Matric No.</td>
    <td colspan="5">&nbsp;<?php echo $matric; ?></td>
    
    <td colspan="3">&nbsp;Sex</td>
    <td colspan="3">&nbsp;<?php echo $sex;?></td>
   
    <td colspan="3">&nbsp;State Of Origin</td>
    <td colspan="4">&nbsp;<?php echo $state; ?></td>
   
    </tr>
  <tr>
    <td colspan="3">&nbsp;Jamb</td>
    <td colspan="5">&nbsp;<?php echo $jamb; ?></td>
    <td colspan="3">&nbsp;Date of Birth</td>
    <td colspan="3">&nbsp;<?php echo $dob;?></td>
    <td colspan="3">&nbsp;Town</td>
    <td colspan="4">&nbsp;<?php echo $town; ?></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;Department</td>
    <td colspan="5">&nbsp;<?php echo $dept; ?></td>
    <td colspan="3">&nbsp;Marital Status</td>
    <td colspan="3">&nbsp;<?php echo $status;?></td>
    <td colspan="3">&nbsp;Year Of Admission</td>
    <td colspan="4">&nbsp; <?php echo $year; ?></td>  
  </tr>
  
<?php
$sql ="SELECT * FROM yearone1st WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
	 $gss101 =$row['gss101'];
				$phy101 =$row['phy101'];
				$gss103 =$row['gss103'];
				$mth131 =$row['mth131'];
				$chm101 =$row['chm101'];
				$cis101 =$row['cis101'];
				$mth111 =$row['mth111'];
				$bio151 =$row['bio151'];
				$phy191 =$row['phy191'];
				$sta111 =$row['sta111'];
	
	}
	
$sql ="SELECT * FROM yearone2nd WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
	extract($row);
				  $phy192 =$row['phy192'];
				 $phy102 =$row['phy102'];
				 $mth112 =$row['mth112'];
				 $gss102 =$row['gss102'];
				 $cis102 =$row['cis102'];
				 $sta112 =$row['sta112'];
				 $cis192 =$row['cis192'];
				 $mth113=$row['mth113'];
				 $cis104 =$row['cis104'];
				 $gss108 =$row['gss108'];
				 $gss107 =$row['gss107'];
				
	}
	
	
		
$sql ="SELECT * FROM yeartwo1st WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
		extract($row);
		 $cis213 =$row['cis213'];
				 $cis221 =$row['cis221'];
				 $cis201 =$row['cis201'];
				 $cis263 =$row['cis263'];
				 $cis261 =$row['cis261'];
				 $mth204 =$row['mth204'];
				 $mth207 =$row['mth207'];
				 $gss210 =$row['gss210'];
				 $gss208 =$row['gss208'];
				 $sta201 =$row['sta201'];
				 $cis265 =$row['cis265'];
				 $gss211 =$row['gss211'];
	 			
	}
		
$sql ="SELECT * FROM yeartwo2nd WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
		extract($row);
		 		 $cis214 =$row['cis214'];
				 $cis262 =$row['cis262'];
				 $cis236 =$row['cis236'];
				 $cis232 =$row['cis232'];
				 $cis244 =$row['cis244'];
				 $cis242 =$row['cis242'];
				 $mth202 =$row['mth202'];
				 $mth205 =$row['mth205'];
				 $sta206 =$row['sta206'];
				 $cis268 =$row['cis268'];
				 $cis204 =$row['cis204'];
	}
$sql ="SELECT * FROM yearthree1st WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
		extract($row);
		 		  $cis371 =$row['cis371'];
				 $cis315 =$row['cis315'];
				 $cis321 =$row['cis321'];
				 $cis310 =$row['cis310'];
				 $cis323 =$row['cis323'];
				
				 $cis312 =$row['cis312'];
				 $cis373 =$row['cis373'];
				 $cis313 =$row['cis313'];
				 $cis361 =$row['cis361'];
	}
	$sql ="SELECT * FROM yearthree2nd WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
		extract($row);
		 		 $cis372 =$row['cis372'];
				 $cis325 =$row['cis325'];
				 $cis322 =$row['cis322'];
				 $cis320 =$row['cis320'];
				 $cis324 =$row['cis324'];				
				 $cis362 =$row['cis362'];
	}
	
	$sql ="SELECT * FROM final1st WHERE matric =$matric";
	$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) {
		extract($row);
		 		$cis401 =$row['cis401'];
				 $cis405 =$row['cis405'];
				 $cis411 =$row['cis411'];
				 $cis415 =$row['cis415'];
				 $cis441 =$row['cis441'];
				
				 $cis461 =$row['cis461'];
				 $cis471 =$row['cis471'];
				 $cis451 =$row['cis451'];
				 $cis400 =$row['cis400'];
			
	}
	$checks = "SELECT * FROM final2nd WHERE matric =$matric";
				$result = dbQuery($checks);
			while($row = dbFetchAssoc($result)) 
			{	extract($row);  
				 $cis404 =$row['cis404'];
				 $cis412 =$row['cis412'];
				 $cis424 =$row['cis424'];
				 $cis454 =$row['cis454'];
				 $cis464 =$row['cis464'];				
				 $cis472 =$row['cis472'];
				 $cis422 =$row['cis422'];				
			}
      global $gss101,$phy101,$gss103,$mth131,$chm101,$cis101,$mth111,$bio151,$phy191,$sta111,$phy192,$phy102,$mth112,$gss102,$cis102,$sta112,$cis192,$mth113,$cis104,$gss108,$gss107,$cis213,$cis221,$cis201,$cis263,$cis261,$mth204,$mth207,$gss210,$gss208,$sta201,$cis265,$gss211,$cis214,$cis262,$cis236,$cis232,$cis244,$cis242,$mth202,$mth205,$sta206,$cis268,$cis204,$cis371,$cis315,$cis321,$cis310,$cis323,$cis312,$cis373,$cis313,$cis361,$cis372,$cis325,$cis322,$cis320,$cis324,$cis362,$cis401,$cis405,$cis411,$cis415,$cis441,$cis461,$cis471,$cis451,$cis400,$cis404,$cis412,$cis424,$cis454,$cis464,$cis472,$cis422;
			$tc1 = 48; $tc2 = 47; $tc3 = 43; $tc4 = 39; 
	$sum1 = ($gss101 * 2) + ($phy101 * 2) + ($gss103 * 2) + ($mth131 * 3)  + ($chm101 * 2) + ($cis101 * 3) + ($mth111 * 3) +
	 ($bio151 * 3) + ($phy191 * 2) + ($sta111  * 2) + ($phy192 * 3) + 
	 ($phy102 * 2) + ($mth112 * 2) + ($gss102 * 2) + ($cis102 * 2)
	  + ($sta112 * 2 ) + ($cis192 * 2)+ ($mth113 * 3)+ ($cis104 * 2)+ ($gss108 * 2) + ($gss107 * 2);
	
	$sum2 = $cis213 * 1 + $cis221 * 2 + $cis201 * 2 + $cis263 * 2 + $cis261 * 2 + $mth204 * 2 + $mth207 * 3 + $gss210 * 3 + $gss208 * 2 + $sta201 * 2 + $cis265 * 2 + $gss211 * 2 + $cis214 * 1 + $cis262 * 2 + $cis236 * 2 + $cis232 * 2 + $cis244 * 3 + $cis242 * 2 + $mth202 * 3 + $mth205 * 2 + $sta206 * 2 + $cis268 * 2 + $cis204 * 2;

	$sum3 = $cis371 * 2 + $cis315 * 3 + $cis321 * 2 + $cis310 * 3  + $cis323 * 2 + $cis312 * 3 + $cis373 * 2 + $cis313 * 2 + $cis361 * 2 + $cis372 * 9 + $cis325 * 3 + $cis322 * 3 + $cis320 * 2 + $cis324 * 3 + $cis362 * 2;
	
	$sum4 = $cis401 *3  + $cis405 * 2 + $cis411 * 2 + $cis415 * 2 + $cis441 * 2 + $cis461 * 2 + $cis471 * 2 + $cis451 * 2 + $cis400 * 2  + $cis404 * 2 + $cis412 * 2 + $cis424 * 2 + $cis454 * 3 + $cis464 * 3 + $cis472 * 6 + $cis422 * 2;
	
	$gpa1 = ($sum1 / $tc1);
	$gpa2 = ($sum2 / $tc2);
	$gpa3 = $sum3 / $tc3;
	$gpa4 = $sum4 / $tc4;
	$cgpa = ($gpa1 + $gpa2 + $gpa3 + $gpa4)/4;
	if($cgpa >= 4.5)
	 $degree = 'FIRST CLASS';
	 elseif($cgpa >= 3.5)
	 $degree ='SECOND CLASS UPPER';
	 elseif($cgpa >= 2.5)
	 $degree ='SECOND CLASS LOWER';
	 elseif($cgpa >= 1.5)
	 $degree ='THIRD CLASS';
	 else
	 $degree ='PASS';
		
	
?>
  
  <tr><td colspan="25">&nbsp;</td></tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5" align="center">&nbsp;100 &nbsp;LEVEL</td>
    <td colspan="5" align="center">&nbsp; 200 &nbsp; LEVEL</td>
    <td colspan="5" align="center">&nbsp;300 &nbsp;LEVEL</td>
     <td colspan="5" align="center">&nbsp;400 &nbsp;LEVEL</td>
    <!-- <td colspan="5" align="center">&nbsp;500 &nbsp;LEVEL</td> -->
  </tr>
  <tr>
    <td>&nbsp;S/N</td>
    <td>&nbsp;CODE</td>
    <td>&nbsp;UNIT</td>
    <td>&nbsp;SCORE</td>
    <td>&nbsp;GRADE</td>
    <td>&nbsp;POINT</td>
     <td>&nbsp;CODE</td>
    <td>&nbsp;UNIT</td>
    <td>&nbsp;SCORE</td>
    <td>&nbsp;GRADE</td>
    <td>&nbsp;POINT</td>
     <td>&nbsp;CODE</td>
    <td>&nbsp;UNIT</td>
    <td>&nbsp;SCORE</td>
    <td>&nbsp;GRADE</td>
    <td>&nbsp;POINT</td>
     <td>&nbsp;CODE</td>
    <td>&nbsp;UNIT</td>
    <td>&nbsp;SCORE</td>
    <td>&nbsp;GRADE</td>
    <td>&nbsp;POINT</td>
     <td>&nbsp;CODE</td>
    <td>&nbsp;UNIT</td>
    <td>&nbsp;SCORE</td>
    <td>&nbsp;GRADE</td>
    <td>&nbsp;POINT</td>
  </tr>

  <?php 
  //for year one first semester
  $yearone1stSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '100' AND courses.semester = 'first' AND std.matric = '$matric'";
  $yearone1stResult = dbQuery($yearone1stSql);
  
  //for year one second semester
  $yearone2ndSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '100' AND courses.semester = 'second' AND std.matric = '$matric'";
  $yearone2ndResult = dbQuery($yearone2ndSql);

  //for year two first semester
  $yeartwo1stSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '200' AND courses.semester = 'first' AND std.matric = '$matric'";
  $yeartwo1stResult = dbQuery($yeartwo1stSql);

  //for year two second semester
  $yeartwo2ndSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '200' AND courses.semester = 'second' AND std.matric = '$matric'";
  $yeartwo2ndResult = dbQuery($yeartwo2ndSql);

   //for year three first semester
   $yearthree1stSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '300' AND courses.semester = 'first' AND std.matric = '$matric'";
   $yearthree1stResult = dbQuery($yearthree1stSql);

   //for year three second semester
  $yearthree2ndSql = "SELECT *, std.name AS studentName, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '300' AND courses.semester = 'second' AND std.matric = '$matric'";
  $yearthree2ndResult = dbQuery($yearthree2ndSql);

  //for year four first semester
  $yearfour1stSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '400' AND courses.semester = 'first' AND std.matric = '$matric'";
  $yearfour1stResult = dbQuery($yearfour1stSql);

  //for year four second semester
  $yearfour2ndSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '400' AND courses.semester = 'second' AND std.matric = '$matric'";
  $yearfour2ndResult = dbQuery($yearfour2ndSql);

  //  //for calculating total units, GP, CGPA (100)
   $calcSql_100 = "SELECT *, SUM(courses.units) AS courseUnits, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '100' AND std.matric = '$matric'";
   $calcResult_100 = dbQuery($calcSql_100);
   while ($calcRow_100 = dbFetchAssoc($calcResult_100)) {
     $tc_100 = $calcRow_100['courseUnits'];
   }

   //  //for calculating total units, GP, CGPA (200)
   $calcSql_200 = "SELECT *, SUM(courses.units) AS courseUnits, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '200' AND std.matric = '$matric'";
   $calcResult_200 = dbQuery($calcSql_200);
   while ($calcRow_200 = dbFetchAssoc($calcResult_200)) {
     $tc_200 = $calcRow_200['courseUnits'];
   }

     //  //for calculating total units, GP, CGPA (300)
     $calcSql_300 = "SELECT *, SUM(courses.units) AS courseUnits, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '300' AND std.matric = '$matric'";
     $calcResult_300 = dbQuery($calcSql_300);
     while ($calcRow_300 = dbFetchAssoc($calcResult_300)) {
       $tc_300 = $calcRow_300['courseUnits'];
     }

       //  //for calculating total units, GP, CGPA (400)
   $calcSql_400 = "SELECT *, SUM(courses.units) AS courseUnits, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '400' AND std.matric = '$matric'";
   $calcResult_400 = dbQuery($calcSql_400);
   while ($calcRow_400 = dbFetchAssoc($calcResult_400)) {
     $tc_400 = $calcRow_400['courseUnits'];
   }
  ?>
    <?php $i = 1; while($yearone1st = dbFetchAssoc($yearone1stResult)) {?>
      <tr>
      <td>&nbsp;<?php echo $i?></td>
    <td><?php echo $yearone1st['courseName']?></td>
    <td><?php echo $yearone1st['units']?></td>
    <td><?php echo $yearone1st['score']?></td>
    <td><?php echo $yearone1st['grade']?></td>
    <td><?php echo $yearone1st['points']?></td>
    </tr>  
    <?php $i++;} ?>

    <?php $i = 1; while($yeartwo1st = dbFetchAssoc($yeartwo1stResult)) {?>
      <tr>
      <td>&nbsp;<?php echo $i?></td>
    <td><?php echo $yeartwo1st['courseName']?></td>
    <td><?php echo $yeartwo1st['units']?></td>
    <td><?php echo $yeartwo1st['score']?></td>
    <td><?php echo $yeartwo1st['grade']?></td>
    <td><?php echo $yeartwo1st['points']?></td>
    </tr>  
    <?php $i++;} ?>

     <?php $i = 1; while($yearthree1st = dbFetchAssoc($yearthree1stResult)) {?>
      <tr>
      <td>&nbsp;<?php echo $i?></td>
    <td><?php echo $yearthree1st['courseName']?></td>
    <td><?php echo $yearthree1st['units']?></td>
    <td><?php echo $yearthree1st['score']?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>  
    <?php $i++;} ?>

     <?php $i = 1; while($yearfour1st = dbFetchAssoc($yearfour1stResult)) {?>
      <tr>
      <td>&nbsp;<?php echo $i?></td>
    <td><?php echo $yearfour1st['courseName']?></td>
    <td><?php echo $yearfour1st['units']?></td>
    <td><?php echo $yearfour1st['score']?></td>
    <<td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>  
    <?php $i++;} ?>

  <tr>
    <td colspan="25">&nbsp;</td>
    
  </tr>
  <tr>
    <td align="center" colspan="21">&nbsp;SECOND SEMESTER</td>
  </tr>
  <tr>
    <td>S/N</td>
    <td>CODE</td>
    <td>UNIT</td>
    <td>SCORE</td>
    <td>GRADE</td>
    <td>POINT</td>
     <td>CODE</td>
    <td>UNIT</td>
    <td>SCORE</td>
    <td>GRADE</td>
    <td>POINT</td>
    <td>CODE</td>
    <td>UNIT</td>
    <td>SCORE</td>
    <td>GRADE</td>
    <td>POINT</td>
    <td>CODE</td>
    <td>UNIT</td>
    <td>SCORE</td>
    <td>GRADE</td>
    <td>POINT</td>
    <td>CODE</td>
    <td>UNIT</td>
    <td>SCORE</td>
    <td>GRADE</td>
    <td>POINT</td>
  </tr>
   <tr>
    <td>1</td>
    <td>PHY192</td>
    <td>&nbsp;<?php echo $phy192; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS214</td>
    <td>&nbsp;<?php echo $cis214; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS372</td>
    <td>&nbsp;<?php echo $cis372; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS404</td>
    <td>&nbsp;<?php echo $cis404; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2</td>
    <td>PHY102</td>
    <td>&nbsp;<?php echo $phy102; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS262/234</td>
    <td>&nbsp;<?php echo $cis262; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS325</td>
    <td>&nbsp;<?php echo $cis325; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS412</td>
    <td>&nbsp;<?php echo $cis412; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3</td>
    <td>MTH112</td>
    <td>&nbsp;<?php echo $mth112; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS236</td>
    <td>&nbsp;<?php echo $cis236; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS322</td>
    <td>&nbsp;<?php echo $cis322; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS424</td>
    <td>&nbsp;<?php echo $cis424; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>4</td>
    <td>GSS102</td>
    <td>&nbsp;<?php echo $gss102; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS232</td>
    <td>&nbsp;<?php echo $cis232; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS320</td>
    <td>&nbsp;<?php echo $cis320; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS454</td>
    <td>&nbsp;<?php echo $cis454; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>5</td>
    <td>CIS102</td>
    <td>&nbsp;<?php echo $cis102; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS244</td>
    <td>&nbsp;<?php echo $cis244; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS324</td>
    <td>&nbsp;<?php echo $cis324; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS464</td>
    <td>&nbsp;<?php echo $cis464; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>6</td>
    <td>STA112</td>
    <td>&nbsp;<?php echo $sta112; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS242/241</td>
    <td>&nbsp;<?php echo $cis242; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS362</td>
    <td>&nbsp;<?php echo $cis362; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS472</td>
    <td>&nbsp;<?php echo $cis472; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>7</td>
    <td>CIS192</td>
    <td>&nbsp;<?php echo $cis192; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MTH202</td>
    <td>&nbsp;<?php echo $mth202; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS422</td>
    <td>&nbsp;<?php echo $cis422; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>8</td>
    <td>MTH113</td>
    <td>&nbsp;<?php echo $mth113; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>MTH205</td>
    <td>&nbsp;<?php echo $mth205; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>9</td>
    <td>CIS104</td>
    <td>&nbsp;<?php echo $cis104; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>STA206</td>
    <td>&nbsp;<?php echo $sta206; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>10</td>
    <td>GSS108</td>
    <td>&nbsp;<?php echo $gss108; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS268</td>
    <td>&nbsp;<?php echo $cis268; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>11</td>
    <td>GSS107</td>
    <td>&nbsp;<?php echo $gss107; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CIS204</td>
    <td>&nbsp;<?php echo $cis204; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>TC</td>
    <td><?php echo $tc_100; ?>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TC</td>
    <td>&nbsp;<?php echo $tc2; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TC</td>
    <td>&nbsp;<?php echo $tc3; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TC</td>
    <td>&nbsp;<?php echo $tc4; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CGPA</td>
    <td><?php echo round($cgpa, 1); ?>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr><td>&nbsp;</td>
  	<td>TQP</td>
    <td>&nbsp;<?php echo $sum1; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TQP</td>
    <td>&nbsp;<?php echo $sum2; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TQP</td>
    <td>&nbsp;<?php echo $sum3; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TQP</td>
    <td>&nbsp;<?php echo $sum4; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>GPA</td>
    <td>&nbsp;<?php echo round($gpa1, 1); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>GPA</td>
    <td>&nbsp;<?php echo round($gpa2, 1); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>GPA</td>
    <td>&nbsp;<?php round($gpa3, 1); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>GPA</td>
    <td>&nbsp;<?php echo round($gpa4, 1); ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 <tr><td colspan="21">&nbsp;</td></tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">CLASS DEGREE</td>
    <td colspan="4">&nbsp;<?php echo $degree; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;EXAM OFFICER</td>
    <td colspan="4">&nbsp;</td>
    <td>SIGNATURE: </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    
  </tr>
  <tr>
    <td colspan="4" align="center">HEAD OF DEPARTMENT</td>
    <td colspan="4">&nbsp;</td>
    <td>SIGNATURE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;DEAN</td>
    <td colspan="4">&nbsp;</td>
    <td>SIGNATURE</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   
  </tr>
</table>
</div>

     
     <!-- content ends here  -->
     
     </td>
    </tr>
   </table></td>
 </tr>
</table>
</body>
</html>
