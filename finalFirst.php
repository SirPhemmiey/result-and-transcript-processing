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
include './library/database.php';
$id =$_GET['Id'];
$sql = "SELECT matric FROM std WHERE id ='$id'";
$result = dbQuery($sql);
//$result = mysql_query($sql) or die(mysql_error());
	while($row = dbFetchAssoc($result)) 
	{extract($row); $matric =$row['matric'];}
$check = "SELECT * FROM final1st WHERE std_id =$id";
$results = dbQuery($check);
			if (dbNumRows($results) >0)
			{
				$type = 'updates';
				$output = ' Fill Details ';
				$output = ' FORM HAVE BEEN SUBMITTED, CHECK IF DETAILS IS CORRECT';
				$checks = "SELECT * FROM final1st WHERE std_id =$id";
				$result = dbQuery($checks);
			while($row = dbFetchAssoc($result)) 
			{	extract($row);  
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
			
			}
			else
			{$type = 'submits';
			$output = ' Fill Details ';			}
			
			
//global $cis401;
?>
<h3 align="center">Final Year-First Semester</h3>
<h3 align="center" style="color:#C36;"><?php echo $output; ?></h3>
<form action="process.php?action=finalForm1" method="post"  name="frmListUser" id="frmListUser">
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
              <td class="content"><input name="id" type="hidden" value="<?php echo $id; ?>" /><input name="matric" type="hidden" class="box" id="matric" value="<?php echo $matric; ?>" /></td>
        </tr>
        
            
           <tr class="entryTable">
              <td class="label">&nbsp; CIS401</td>
              <td class="content"><input name="cis401" type="text" class="box" id="" value="<?php echo $cis401; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS405</td>
              <td class="content"><input name="cis405" type="text" class="box" id="" value="<?php echo $cis405; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;CIS411</td>
              <td class="content"><input name="cis411" type="text" class="box" id="" value="<?php echo $cis411; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp; CIS415</td>
              <td class="content"><input name="cis415" type="text" class="box" id="" value="<?php echo $cis415; ?>" size="15" maxlength="8" /></td>
            </tr>
           <tr class="entryTable">
              <td class="label">&nbsp; CIS441</td>
              <td class="content"><input name="cis441" type="text" class="box" id="" value="<?php echo $cis441; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS461</td>
              <td class="content"><input name="cis461" type="text" class="box" id="" value="<?php echo $cis461; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS471</td>
              <td class="content"><input name="cis471" type="text" class="box" id="" value="<?php echo $cis471; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS451</td>
              <td class="content"><input name="cis451" type="text" class="box" id=""  value="<?php echo $cis451; ?>"size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS400</td>
              <td class="content"><input name="cis400" type="text" class="box" id="" value="<?php echo $cis400; ?>" size="15" maxlength="8" /></td>
            </tr>
            
              <tr class="entryTable">
              <td class="label">&nbsp;POST TYPE</td>
              <td class="content"><input name="type" type="text" id="TYPE" class="box" value="<?php echo $type; ?>" size="15" maxlength="8" /></td>
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
