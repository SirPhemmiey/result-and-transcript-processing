<?php
if($_SESSION['user_type'] == 'employee'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Exam Officer Menu </div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=query">Query Result</a></li> 
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=resultCheck">Check Result</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=vSDetails">Enter Scores</a></li>  
            <!-- <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=employee&view=search"> Search Project</a></li>	 -->
			<li><a href="<?php echo WEB_ROOT; ?>index.php?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
	 
<?php 
}else if($_SESSION['user_type'] == 'admin'){
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Admin Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php echo ucwords($_SESSION['user_name']); ?></a></li>
            <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=stdReg">Add new Student</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=vSDetails">View Student Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=addEngg">Add new Staff</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=enggDetails">View Staff Details</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=addDept">Add new department</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=deptDetails">View Departments</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=admin&view=addCourses">Add Courses</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>index.php?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
} else if ($_SESSION['user_type'] == 'student') {
?>
<div id="ddblueblockmenu">
	  <div class="menutitle">Student Menu</div>
		  <ul>
			<li><a href="<?php echo WEB_ROOT; ?>">Welcome,&nbsp;<?php echo ucwords($_SESSION['user_name']); ?></a></li>
			<li><a href="<?php echo WEB_ROOT; ?>view.php?mod=student&view=regCourses">Register Courses</a></li>
			<!-- <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=student&view=vCourses">Courses</a></li> -->
            <li><a href="<?php echo WEB_ROOT; ?>view.php?mod=student&view=checkResult">Check Result</a></li>
			<li><a href="<?php echo WEB_ROOT; ?>index.php?logOut">Logout</a></li>
		  </ul>
	  <div class="menutitle">&nbsp;</div>	  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php 
}
?>