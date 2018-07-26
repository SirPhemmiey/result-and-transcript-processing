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
$check = "SELECT * FROM yeartwo1st WHERE std_id =$id";
$results = dbQuery($check);
			if (dbNumRows($results) >0)
			{
				$type = 'updates';
				$output = ' Fill Details ';
				$output = ' FORM HAVE BEEN SUBMITTED, CHECK IF DETAILS IS CORRECT';
				$checks = "SELECT * FROM yeartwo1st WHERE std_id =$id";
				$result = dbQuery($checks);
			while($row = dbFetchAssoc($result)) 
			{	extract($row);  
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
			
			}
			else
			{$type = 'submits';
			$output = ' Fill Details ';			}
			
			global $cis213,$cis221,$cis201,$cis263,$cis261,$mth204,$mth207,$gss210,$gss208,$sta201,$cis265,$gss211;

?>

<h3 align="center">Year Two-First Semester</h3>
<h3 align="center" style="color:#C36;"><?php echo $output; ?></h3>
<form action="process.php?action=yearTwoForm1" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Result Details ::</td>
    </tr>
    <tr class="entryTable">
              <td class="label">&nbsp;</td>
              <td class="content"><input name="id" type="hidden" value="<?php echo $id; ?>" /><input name="matric" type="hidden" class="box" id="matric" value="<?php echo $matric; ?>" /></td>
        </tr>
        
       <tr class="entryTable">
              <td class="label">&nbsp; CIS213</td>
              <td class="content"><input name="cis213" type="text" class="box" id="cis2131" value="<?php echo $cis213; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS201</td>
              <td class="content"><input name="cis201" type="text" class="box" id="cis201" value="<?php echo $cis201; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS221</td>
              <td class="content"><input name="cis221" type="text" class="box" id="cis221" value="<?php echo $cis221; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;CIS263</td>
              <td class="content"><input name="cis263" type="text" class="box" id="" value="<?php echo $cis263; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp; CIS261</td>
              <td class="content"><input name="cis261" type="text" class="box" id="" value="<?php echo $cis261; ?>" size="15" maxlength="8" /></td>
            </tr>
           <tr class="entryTable">
              <td class="label">&nbsp; MTH204</td>
              <td class="content"><input name="mth204" type="text" class="box" id="" value="<?php echo $mth204; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; MTH207</td>
              <td class="content"><input name="mth207" type="text" class="box" id="" value="<?php echo $mth207; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; GSS210</td>
              <td class="content"><input name="gss210" type="text" class="box" id="" value="<?php echo $gss210; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; GSS208</td>
              <td class="content"><input name="gss208" type="text" class="box" id=""  value="<?php echo $gss208; ?>"size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; STA201</td>
              <td class="content"><input name="sta201" type="text" class="box" id="" value="<?php echo $sta201; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; CIS265</td>
              <td class="content"><input name="cis265" type="text" class="box" id="" value="<?php echo $cis265; ?>" size="15" maxlength="8" /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp; GSS211</td>
              <td class="content"><input name="gss211" type="text" class="box" id="" value="<?php echo $gss211; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <!-- <td class="label">&nbsp;POST TYPE</td> -->
              <td class="content"><input name="type" type="hidden" id="TYPE" class="box" value="<?php echo $type; ?>" size="15" maxlength="8" /></td>
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
