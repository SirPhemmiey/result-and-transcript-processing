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
  <td><img src="images/salem.jpg" width="1200" height="120"></td>
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
       $matric =$_POST['matric'];
       $level = $_POST['level'];
       $sems = $_POST['sems'];
  $sql = "SELECT *, std.name AS studentName, courses.name AS courseName, department.name as departmentName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '$level' AND courses.semester = '$sems' AND std.matric = '$matric'";
  // $sql = "SELECT *, std.name AS studentName, courses.name AS courseName, department.name as departmentName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE std.matric = '$matric'";
  
  $resultMain = dbQuery($sql);
  if (dbNumRows($resultMain) > 0) {
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
<?php } else {?>
<h3>Oops!</h3>
<span>Looks like this record does not exit or hasn't been entered. Please check again.</span>
<?php }  ?>
<?php
          //for year one first semester
  $yearSql = "SELECT *, courses.name AS courseName, courses.semester as Semester FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '$level' AND courses.semester = '$sems' AND std.matric = '$matric'";
  $yearResult = dbQuery($yearSql);
		if (dbAffectedRows($yearResult) > 0) {
?>
  
  <tr><td colspan="25">&nbsp;</td></tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5" align="center">&nbsp;<?php echo $level;?> &nbsp;LEVEL</td>
    <!-- <td colspan="5" align="center">&nbsp; 200 &nbsp; LEVEL</td>
    <td colspan="5" align="center">&nbsp;300 &nbsp;LEVEL</td>
     <td colspan="5" align="center">&nbsp;400 &nbsp;LEVEL</td> -->
    <!-- <td colspan="5" align="center">&nbsp;500 &nbsp;LEVEL</td> -->
  </tr>
  <tr>
    <td>&nbsp;S/N</td>
    <td>&nbsp;CODE</td>
    <td>&nbsp;UNIT</td>
    <td>&nbsp;SCORE</td>
    <td>&nbsp;GRADE</td>
    <td>&nbsp;SEMESTER</td>
    <td>&nbsp;POINT</td>

  </tr>

  <?php 
//   //for year one first semester
//   $yearone1stSql = "SELECT *, courses.name AS courseName FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '100' AND courses.semester = 'first' AND std.matric = '$matric'";
//   $yearone1stResult = dbQuery($yearone1stSql);

  //  //for calculating total units, GP, CGPA
   $calcSql = "SELECT *, SUM(courses.units) AS courseUnits, SUM(results.points) as resultPoint, courses.name AS courseName, courses.semester as Semester FROM results JOIN students_courses ON (results.students_courses_id = students_courses.id) JOIN courses ON (students_courses.course_id = courses.id) JOIN std ON (results.std_id = std.id) JOIN department ON (courses.department_id = department.id) WHERE courses.level = '$level' AND courses.semester = '$sems' AND std.matric = '$matric'";
   $calcResult = dbQuery($calcSql);
   while ($calcRow = dbFetchAssoc($calcResult)) {
     $tc = $calcRow['courseUnits'];
     $tp = $calcRow['resultPoint'];
     $gpa = round($tp/$tc, 2);
   }

  ?>
  
    <?php $i = 1; while($year = dbFetchAssoc($yearResult)) {?>
        <tr>
      <td>&nbsp;<?php echo $i?></td>
    <td><?php echo $year['courseName']?></td>
    <td><?php echo $year['units']?></td>
    <td><?php echo $year['score']?></td>
    <td><?php echo $year['grade']?></td>
    <td><?php echo ucfirst($year['Semester'])?></td>
    <td><?php echo $year['points']?></td>
    </tr>  

    <?php $i++;} ?>
    <?php //while($yeartwo1st = dbFetchAssoc($yearone2ndResult)) {?>
    <!-- <td><?php echo $yeartwo1st['courseName']?></td>
    <td><?php echo $yeartwo1st['units']?></td>
    <td><?php echo $yeartwo1st['score']?></td>
    <td><?php echo $yeartwo1st['grade']?></td>
    <td><?php echo $yeartwo1st['points']?></td> -->
    <?php //} ?>
  
  <tr>
    <td colspan="25">&nbsp;</td>
    
  </tr>


  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TC&nbsp;</td>
    <td><?php echo $tc; ?>&nbsp;</td>
  </tr>
   <tr><td>&nbsp;</td>
  	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>TP</td>
    <td><?php echo $tp;?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>GPA</td>
    <td><?php echo $gpa;?></td>
  </tr>
 <tr><td colspan="21">&nbsp;</td></tr>
  <!-- <tr>
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
  </tr> -->
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
    <?php }?>

     
     <!-- content ends here  -->
     
     </td>
    </tr>
   </table></td>
 </tr>
</table>
</body>
</html>
