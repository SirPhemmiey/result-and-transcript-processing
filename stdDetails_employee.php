<h3>Student Details - Staff View</h3>
<form action="" method="post"  name="frmListUser" id="frmListUser">
  <table width="680" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td>S/N</td>
      <td >Student Name </td>
      <td>Matric No.</td>
      <td>Program Type</td>
      <td>Department</td>
      <td width="100">Action</td>
    </tr>
    <?php
	//$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM std
			ORDER BY name ASC";
	$result = dbQuery($sql);
	$i=0;
	$a=1;
	while($row = dbFetchAssoc($result)) {
	extract($row);

	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	$i += 1;
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
    	<td><?php echo $a; ?></td>
      <td width="200">&nbsp;<?php echo ucwords(strtolower($name)); ?></td>
      <td  align="center"><?php echo $matric; ?></td>
      <td><?php echo $programType ?></td>
      <td width="150"><?php echo $dept ?></td>
      <td width="100" align="center">
      <form action="view.php?mod=employee&view=addGrade" method="post">
      <input type="hidden" name="matric" value="<?php echo $matric;?>">
      <input type="hidden" name="std_id" value="<?php echo $id?>">
      <select required name="level" id="level">
              <option value="choose">--Choose</option>
              <option value="100">100</option>
             <option value="200">200</option>
             <option value="300">300</option>
             <option value="400">400</option>
              </select> <br> <br>
              <select required name="sems" id="sems">
              <option value="choose">--Choose</option>
              <option value="first">First Semester</option>
             <option value="second">Second Semester</option>
              </select> <br> <br>
      
      <input type="submit" value="Add Grade">
      </form>
      </td>
    </tr>
    <?php
	$a+=1;
	} // end while
	?>
    <tr>
      <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" align="right">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
