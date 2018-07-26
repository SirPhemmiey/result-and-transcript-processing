<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<?php
// require_once 'library/database.php';
// $id =$_GET['Id'];
// $sql = "SELECT matric FROM std WHERE id =$id";
// $result = dbQuery($sql);
// 	while($row = dbFetchAssoc($result)) 
// 	{extract($row); $matric =$row['matric'];}
// $check = "SELECT * FROM yearOne1st WHERE std_id =$id";
// $results = dbQuery($check);
// 			if (dbNumRows($results) >0)
// 			{
// 				$type = 'updates';
// 				$output = ' Fill Details ';
// 				$output = ' FORM HAVE BEEN SUBMITTED, CHECK IF DETAILS IS CORRECT';
// 				$checks = "SELECT * FROM yearOne1st WHERE std_id =$id";
// 				$result = dbQuery($checks);
// 			while($row = dbFetchAssoc($result)) 
// 			{	extract($row);  
// 				 $gss101 =$row['gss101'];
// 				$phy101 =$row['phy101'];
// 				$gss103 =$row['gss103'];
// 				$mth131 =$row['mth131'];
// 				$chm101 =$row['chm101'];
// 				$cis101 =$row['cis101'];
// 				$mth111 =$row['mth111'];
// 				$bio151 =$row['bio151'];
// 				$phy191 =$row['phy191'];
// 				$sta111 =$row['sta111'];
// 			}
			
// 			}
// 			else
// 			{$type = 'submits';
// 			$output = ' Fill Details ';			}
			
			
$cust_id = (int)$_SESSION['user_id'];
	$sql = "SELECT * 
			FROM department
			ORDER BY name ASC";
	$result = dbQuery($sql);
	//$i=0;
	// while($row = dbFetchAssoc($result)) {
	// extract($row);
	// if ($i%2) {
	// 	$class = 'row1';
	// } else {
	// 	$class = 'row2';
	// }
	// $i += 1;
?>
<h3 align="center">Register your courses</h3>
<h3 align="center" style="color:#C36;"><?php echo $output; ?></h3>
<form action="process.php?action=yearOneForm1" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Course Units ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;</td>
              <td class="content"><input name="id" type="hidden" value="<?php echo $id; ?>" /><input name="matric" type="hidden" class="box" id="matric" value="<?php echo $matric; ?>" /></td>
            </tr>

            <tr class="entryTable">
              <td class="label">Department</td>
              <td class="content"><select name="department" id="">
              <option value="choose">--Choose a department--</option>
              <?php while($row = dbFetchAssoc($result)) {?>
              <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
              <?php }?>
              </select></td>
            </tr>

            <tr class="entryTable">
              <td class="label">Level and Semester</td>
              <td class="content"><select name="levelSems" id="">
              <option value="choose">--Choose a level--</option>
              <option value="yearone1st">100L - First Semester</option>
             <option value="yearone2nd">100L - Second Semester</option>
             <option value="yeartwo1st">200L - First Semester</option>
             <option value="yeartwo2nd">200L - Second Semester</option>
             <option value="yearthree1st">300L - First Semester</option>
             <option value="yearthree2nd">300L - Second Semester</option>
              </select></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp; GSS101</td>
              <td class="content"><input name="gss101" type="text" class="box" id="GSS101" value="<?php echo $gss101; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;GSS103</td>
              <td class="content"><input name="gss103" type="text" class="box" id="GSS103" value="<?php echo $gss103; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;PHY101</td>
              <td class="content"><input name="phy101" type="text" class="box" id="PHY101" value="<?php echo $phy101; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;MTH131</td>
              <td class="content"><input name="mth131" type="text" class="box" id="MTH131" value="<?php echo $mth131; ?>" size="15" maxlength="8" /></td>
            </tr>
           <tr class="entryTable">
              <td class="label">&nbsp;CHM101</td>
              <td class="content"><input name="chm101" type="text" class="box" id="CHM101" value="<?php echo $chm101; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;CIS101</td>
              <td class="content"><input name="cis101" type="text" class="box" id="CIS101" value="<?php echo $cis101; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;MTH111</td>
              <td class="content"><input name="mth111" type="text" class="box" id="MTH111" value="<?php echo $mth111; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;PHY191</td>
              <td class="content"><input name="phy191" type="text" class="box" id="PHY191"  value="<?php echo $phy191; ?>"size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;BIO151</td>
              <td class="content"><input name="bio151" type="text" class="box" id="BIO151" value="<?php echo $bio151; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;STA111</td>
              <td class="content"><input name="sta111" type="text" class="box" id="STA111" value="<?php echo $sta111; ?>" size="15" maxlength="8" /></td>
            </tr>
             <tr class="entryTable">
              <!-- <td class="label">&nbsp;POST TYPE</td> -->
              <td class="content"><input name="type" type="hidden" id="TYPE" class="box" value="<?php echo $type; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('GSS101','','R','PHY101','','R','GSS103','','R','MTH131','','R',
         'CHM101','','R','CIS101','','R','MTH111','','R','BIO151','','R','PHY191','','R','STA111','','R','TYPE','','R');return document.MM_returnValue" value=" SUBMIT ">
             </td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
