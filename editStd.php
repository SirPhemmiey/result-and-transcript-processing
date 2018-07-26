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
$id = $_GET['Id']; 
$sql= "SELECT * FROM std WHERE id = $id";
$result = dbQuery($sql);
while($data = dbFetchAssoc($result)){
extract($data);
?>
<h3>sEdit Student Details - Admin View</h3>
<form action="process.php?action=editStd" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Edit Student Details ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right">
			  </div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Student, Name</td>
              <td class="content"><input name="id" type="hidden"  value="<?php echo $id; ?>"/><input name="name" type="text" class="box" id="Name" size="50"  value="<?php echo $name; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Jamb No.</td>
              <td class="content"><input name="jamb" type="text" class="box" id="Jamb" size="50"  value="<?php echo $jamb; ?>"/></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;Matric No.</td>
              <td class="content"><input name="matric" type="text" class="box" id="" size="50"  value="<?php echo $matric; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Email.</td>
              <td class="content"><input name="email" type="email" class="box" id="" size="50"  value="<?php echo $email; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Password.</td>
              <td class="content"><input name="password" type="password" class="box" id="" size="50"  value="<?php echo $password; ?>"/></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Date of Birth</td>
              <td class="content"><input name="dob" type="date" class="box" value="<?php echo $dob; ?>" id="Dob" /></td>
            </tr>
            	<tr class="entryTable">
              <td valign="top" class="label">&nbsp;Sex.</td>
              <td class="content"><input name="sex" cols="40" value="<?php echo $sex; ?>"  size="30"class="box" id="sex" /></td>
            </tr>

			  <tr class="entryTable">
              <td class="label">&nbsp;LGA/City</td>
              <td class="content"><input name="lga" type="text" class="box" id="Lga" value="<?php echo $lga; ?>"  size="50"  /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;Village Town</td>
              <td class="content"><input name="town" type="text" class="box" id="Town" value="<?php echo $town; ?>"  size="50"  /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;State</td>
              <td class="content"><input name="state" type="text" class="box" id="State" value="<?php echo $state;  ?>" size="30"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Nationality</td>
              <td class="content"><input name="nat" type="text" class="box" id="Nat" value="<?php echo $nat; ?>"  size="30"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Mobile No. </td>
              <td class="content"><input name="mobile" type="text" class="box" id="Mobile" value="<?php echo $mobile ?>"  size="30" maxlength="60" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Year Of Admission. </td>
              <td class="content"><input name="year" type="text" class="box" id="year" value="<?php echo $year ?>"  size="30" maxlength="60" /></td>
            </tr>
            
            <tr class="entryTable">
              <td valign="top" class="label">&nbsp;Address.</td>
              <td class="content"><textarea name="address" cols="40" rows="4" class="box" id="Address">
			  <?php echo $address; ?>
			  </textarea></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;Programme Type</td>
              <td class="content"><input name="programType" type="text" class="box" id="Ptype" value="<?php echo $programType ?>"  size="70"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Department</td>
              <td class="content"><input name="dept" type="text" class="box" id="Dept" value="<?php echo $dept?>"  size="70"  /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;Marital Status</td>
              <td class="content"><input name="status" type="text" class="box" id="Status" value="<?php echo $status?>"  size="70"  /></td>
            </tr>
             
            <tr class="entryTable">
              <td class="label">&nbsp; Religioin </td>
              <td class="content"><input name="religion" type="text" class="box" id="Religion" value="<?php echo $religion ?>" size="60"/> </td>
            </tr>
            
            
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin"onclick="MM_validateForm('Name','','R','Sid','','R','Dob','','R',
             'Lga','','R','State','','R','Nat','','R','Mobile','','R','Address','','R','Ptype','','R','','','R','Sname','','R','Skill','','R','Sphone','','R',
             'School','','R','Religion','','R','Occupation','','R','Pay','','R');return document.MM_returnValue" value=" Update <?php //echo $name; ?>"></td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php } ?>
<p>&nbsp;</p>
