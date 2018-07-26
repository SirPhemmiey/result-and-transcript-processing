<h3>Complain Details - Admin View</h3>
<form action="processLeave.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
    <tr align="center" id="listTableHeader">
      <td width="747">Complain Title</td>
      <td width="260">Com.Type </td>
      <td width="139">Status</td>
      <td width="150">Detail</td>
    </tr>
    <?php
	$sid = $_SESSION['reg_sid'];
	$sql = "SELECT * FROM tbl_personal WHERE sid= '$sid'"; 
			
	$result = dbQuery($sql);
	$i=0;
	while($row = dbFetchAssoc($result)) {
	extract($row);
	}
	?>
    <tr class="<?php echo $class; ?>" style="height:25px;">
      <td>&nbsp;<?php echo $row['name']; ?></td>
      <td width="260" align="center"><?php echo $row['dob']; ?></td>
  
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
