<h3>Student Details - Admin View</h3>
<p>To add New Student <a href="view.php?mod=admin&view=stdReg">Click Here</a> </p>
<?php if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg']; }?>
<?php //session_unset('msg'); }?>
<form action="" method="post"  name="frmListUser" id="frmListUser">
  <table width="680" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td>S/N</td>
      <td >Student Name </td>
      <td>Matric No.</td>
      <td>Email</td>
      <td>Sex</td>
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
      <td  align="center"><?php echo $email; ?></td>
      <td width="100" align="center"><?php echo $sex; ?></td>
      <td><?php echo $programType ?></td>
      <td width="150"><?php echo $dept ?></td>
      <td width="100" align="center"><a href="javascript:editStdDetail(<?php echo $id; ?>);">Edit</a> / <a href="javascript:deleteStd(<?php echo $id; ?>);">Delete</a> </td>
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
