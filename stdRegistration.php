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
<h3 align="center">Student Registration - Step One</h3>
<form action="process.php?action=addStd" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Student Details ::</td>
    </tr> 
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Full Name</td>
              <td class="content"><input name="name" type="text" class="box" id="Name" size="50" maxlength="30" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Matric No</td>
              <td class="content"><input name="matric" type="text" class="box" id="Matric" value="" size="15" maxlength="15" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Jamb No /Reg No:</td>
              <td class="content"><input name="jamb" type="text" class="box" id="Jamb" value="" size="15" maxlength="15" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Email:</td>
              <td class="content"><input name="email" type="email" class="box" id="email" value="" size="15" maxlength="15" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Password:</td>
              <td class="content"><input name="password" type="password" class="box" id="email" value="" size="15" maxlength="15" /></td>
            </tr>
           
            <tr class="entryTable">
              <td class="label">&nbsp;Sex </td>
              <td class="content">
              				<select name="sex" type="text" class="box" id="Sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            </select>
              </td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Date of Birth</td>
              <td class="content"><input name="dob" type="date" class="box" id="Dob" /></td>
            </tr>
            	<tr class="entryTable">
              <td valign="top" class="label">&nbsp;Address.</td>
              <td class="content"><textarea name="address" cols="40" rows="4" class="box" id="Address"></textarea></td>
            </tr>
				
			  <tr class="entryTable">
              <td class="label">&nbsp;LGA</td>
              <td class="content"><input name="lga" type="text" class="box" id="Lga" value="" size="50"  /></td>
            </tr>
			  <tr class="entryTable">
              <td class="label">&nbsp;Town</td>
              <td class="content"><input name="town" type="text" class="box" id="Town" value="" size="50"  /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;State</td>
              <td class="content"><input name="state" type="text" class="box" id="State" value="" size="30"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Nationality</td>
              <td class="content"><input name="nat" type="text" class="box" id="Nat" value="" size="30"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Mobile No. </td>
              <td class="content"><input name="mobile" type="text" class="box" id="Mobile" value="" size="30" maxlength="60" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Year of Admission. </td>
              <td class="content"><input name="year" type="text" class="box" id="Year" value="" size="10" maxlength="4" /></td>
            </tr>
            
             <tr class="entryTable">
              <td class="label">&nbsp;Programme Type</td>
              <td class="content">
              				<select name="programType" type="text" class="box" id="Ptype">
                            <option value="bsc">B.SC</option>
                           
                            </select>
              </td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;Department</td>
              <td class="content">
              				<select name="dept" type="text" class="box" id="Dept">
                      
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            </select>
              </td>
			<tr class="entryTable">
              <td class="label">&nbsp;Marital Status:</td>
              <td class="content">
              				<select name="status" type="text" class="box" id="Status">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            </select>
              </td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp; Religion </td>
              <td class="content">
              				<select name="religion" type="text" class="box" id="Religion">
                            <option value="Christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                            </select>
              </td>
            </tr>
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('Name','','R','Matric','','R','Jamb','','R','Dob','','R',
             'Address','','R','Lga','','R','Town','','R','State','','R','Nat','','R','Mobile','','R','Year','','R','Ptype','','R','Dept','','R','Religion','','R');return document.MM_returnValue" value=" SUBMIT ">
             </td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
