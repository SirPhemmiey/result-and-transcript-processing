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
// $check = "SELECT * FROM yeartwo1st WHERE std_id =$id";
// $results = dbQuery($check);
// 			if (dbNumRows($results) >0)
// 			{
// 				$type = 'updates';
// 				$output = ' Fill Details ';
// 				$output = ' FORM HAVE BEEN SUBMITTED, CHECK IF DETAILS IS CORRECT';
// 				$checks = "SELECT * FROM yeartwo1st WHERE std_id =$id";
// 				$result = dbQuery($checks);
// 			while($row = dbFetchAssoc($result)) 
// 			{	extract($row);  
// 				 $cis213 =$row['cis213'];
// 				 $cis221 =$row['cis221'];
// 				 $cis201 =$row['cis201'];
// 				 $cis263 =$row['cis263'];
// 				 $cis261 =$row['cis261'];
// 				 $mth204 =$row['mth204'];
// 				 $mth207 =$row['mth207'];
// 				 $gss210 =$row['gss210'];
// 				 $gss208 =$row['gss208'];
// 				 $sta201 =$row['sta201'];
// 				 $cis265 =$row['cis265'];
// 				 $gss211 =$row['gss211'];
				 
				
// 			}
			
// 			}
// 			else
// 			{$type = 'submits';
// 			$output = ' Fill Details ';			}
			
// 			global $cis213,$cis221,$cis201,$cis263,$cis261,$mth204,$mth207,$gss210,$gss208,$sta201,$cis265,$gss211;

$sql = "SELECT * 
FROM department
ORDER BY name ASC";
$result = dbQuery($sql);

?>

<form action="process.php?action=addCourses_admin" method="post"  name="frmListUser" id="frmListUser">
  <table width="600" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      <td>:: Add Courses ::</td>
    </tr>

     <tr class="entryTable">
              <td class="label">Department</td>
              <td class="content"><select name="department_id" id="department_id">
              <option value="choose">--Choose a department--</option>
              <?php while($row = dbFetchAssoc($result)) {?>
              <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
              <?php }?>
              </select></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">Level</td>
              <td class="content"><select name="level" id="level">
              <option value="choose">--Choose a level--</option>
              <option value="100">100</option>
             <option value="200">200</option>
             <option value="300">300</option>
             <option value="300">400</option>
              </select></td>
            </tr>

              <tr class="entryTable">
              <td class="label">Semester</td>
              <td class="content"><select name="sems" id="sems">
              <option value="choose">--Choose a semester--</option>
              <option value="first">First Semester</option>
             <option value="second">Second Semester</option>
              </select></td>
            </tr>
    <tr class="entryTable">
              <td class="label">Number of fields</td>
              <td class="content"><input name="num" id="num" type="text" class="box" placeholder="Number of courses"/></td>
        </tr>
     
        <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="button" id="btnLogin" value="LOAD FIELDS">
             </td>
            </tr>
        </table></td>
           
    </tr>
  </table>
  <div id="data"></div>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>



<script>
$(document).ready(function() {
  
  $("#btnLogin").on('click', function() {
   var dept_id = $("#num_fields").val();
   var level = $("#level").val()
   var sems = $("#sems").val()
   var num = $("#num").val()
   if (dept_id != 'choose' && num != '' && level != 'choose' && sems != 'choose') {
      $.ajax({
      url: 'addFields.php',
      type: 'post',
      beforeSubmit: function() {
          $("#data").html("Please wait...");
      },
      data: {
          dept_id: dept_id,
          level: level,
          sems: sems
      },
      success: function(res) {
          $("#data").html(res);
      }
  })
   }
   else {
       alert("Please select an option from the dropdown");
   }
  })
})
</script>