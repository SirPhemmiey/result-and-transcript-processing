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
	$cust_id = (int)$_SESSION['user_id'];
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
      <select name="level" id="levSems">
      <option value="">--Please choose--</option>
      <option value="yearone1st">100L - First Semester</option>
        <option value="yearone2nd">100L - Second Semester</option>
        <option value="yeartwo1st">200L - First Semester</option>
        <option value="yeartwo2nd">200L - Second Semester</option>
        <option value="yearthree1st">300L - First Semester</option>
        <option value="yearthree2nd">300L - Second Semester</option>
      </select>
      <input type="hidden" name="level">
      <a href="javascript:addGrade(<?php echo $id; ?>, onefirst);">Add Grade</a>
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
