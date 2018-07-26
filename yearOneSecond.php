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
require_once 'library/database.php';
$id =$_GET['Id'];
$sql = "SELECT matric FROM std WHERE id =$id";
$result = dbQuery($sql);
	while($row = dbFetchAssoc($result)) 
	{extract($row); $matric =$row['matric'];}
$check = "SELECT * FROM yearOne2nd WHERE std_id =$id";
$results = dbQuery($check);
			if (dbNumRows($results) >0)
			{
				$type = 'updates';
				$output = ' Fill Details ';
				$output = ' FORM HAVE BEEN SUBMITTED, CHECK IF DETAILS IS CORRECT';
				$checks = "SELECT * FROM yearOne2nd WHERE std_id =$id";
				$result = dbQuery($checks);
			while($row = dbFetchAssoc($result)) 
			{	extract($row);  
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
			
			}
			else
			{$type = 'submits';
      $output = ' Fill Details ';
      global $phy192,$phy102,$mth112,$gss102,$cis102,$sta112,$cis192,$mth113,$cis104,$gss108,$gss107;
}
			
?>
<h3 align="center">Year One-First Semester</h3>
<h3 align="center" style="color:#C36;"><?php echo $output; ?></h3>
<form action="process.php?action=yearOneForm2" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Result Details ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;</td>
              <td class="content"><input name="id" type="hidden" value="<?php echo $id; ?>" /><input name="matric" type="hidden" class="box" id="matric" value="<?php echo $matric; ?>" size="15" maxlength="8" /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;PHY192</td>
              <td class="content"><input name="phy192" type="text" class="box" id="PHY192" value="<?php echo $phy192; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;PHY102</td>
              <td class="content"><input name="phy102" type="text" class="box" id="PHY102" value="<?php echo $phy102; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;MTH112</td>
              <td class="content"><input name="mth112" type="text" class="box" id="MTH112" value="<?php echo $mth112; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;GSS102</td>
              <td class="content"><input name="gss102" type="text" class="box" id="GSS102" value="<?php echo $gss102; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;CIS102</td>
              <td class="content"><input name="cis102" type="text" class="box" id="CIS102" value="<?php echo $cis102; ?>" size="15" maxlength="8" /></td>
            </tr>
           <tr class="entryTable">
              <td class="label">&nbsp;STA112</td>
              <td class="content"><input name="sta112" type="text" class="box" id="STA112" value="<?php echo $sta112; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;CIS192</td>
              <td class="content"><input name="cis192" type="text" class="box" id="CIS192" value="<?php echo $cis192; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;MTH113</td>
              <td class="content"><input name="mth113" type="text" class="box" id="MTH113" value="<?php echo $mth113; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;CIS104</td>
              <td class="content"><input name="cis104" type="text" class="box" id="CIS104" size="15" value="<?php echo $cis104; ?>"  maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;GSS108</td>
              <td class="content"><input name="gss108" type="text" class="box" id="GSS108" value="<?php echo $gss108; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;GSS107</td>
              <td class="content"><input name="gss107" type="text" class="box" id="GSS107" value="<?php echo $gss107; ?>" size="15" maxlength="8" /></td>
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
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('Name','','R','Matric','','R','Jamb','','R','Dob','','R',
             'Address','','R','Lga','','R','Town','','R','State','','R','Nat','','R','Mobile','','R','Ptype','','R','Dept','','R','Religion','','R');return document.MM_returnValue" value=" SUBMIT ">
             </td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
