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
<h3>Student Registration - Step Two Specify</h3>
<form action="process.php?action=addStd2" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Sponsorship Details ::</td>
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
      
            <tr class="entryTable">
              <td class="label">Computer&nbsp;Skill Aquired</td>
              <td class="content"><input name="skill" type="text" class="box" id="Skill" value="" size="60"/></td>
            </tr>
           
            <tr class="entryTable">
              <td class="label">&nbsp; Religioin </td>
              <td class="content">
              				<select name="religion" type="text" class="box" id="Religion">
                            <option value="Christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                            </select>
              </td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Last School Attended </td>
              <td class="content"><textarea name="school" cols="40" rows="4" class="box" id="School"></textarea></td>
            </tr>
            	<tr class="entryTable">
              <td valign="top" class="label">&nbsp; Sponsor' Name</td>
              <td class="content"><input name="name" type="text" class="box" id="Name" /></td>
            </tr>

			  <tr class="entryTable">
              <td class="label">&nbsp;Sponsor's Occupation</td>
              <td class="content"><input name="occupation" type="text" class="box" id="Occupation" value="" size="50"  /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;Sponsor's Mobile. </td>
              <td class="content"><input name="mobile" type="text" class="box" id="Mobile" value="" size="30" maxlength="60" /></td>
            </tr>
             <tr class="entryTable">
              <td class="label">&nbsp;Payment Detail. </td>
              <td class="content"><input name="pay" type="text" class="box" id="Pay" size="30" maxlength="60" /></td>
            </tr>
              
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" onclick="MM_validateForm('Name','','R','Skill','','R','Mobile','','R',
             'School','','R','Religion','','R','Occupation','','R');return document.MM_returnValue" value="Finish">
             </td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
