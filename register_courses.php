
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
<?php if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg']; ?>
<?php session_unset('msg'); }?>
<h3 align="center">Register your courses</h3>
<form action="process.php?action=addCourses" method="post"  name="frmListUser" id="frmListUser">
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
             <option value="400">400</option>
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
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="button" id="btnLogin" value="LOAD COURSES">
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
     var dept_id = $("#department_id").val();
     var level = $("#level").val()
     var sems = $("#sems").val()
     if (dept_id != 'choose' && level != 'choose' && sems != 'choose') {
        $.ajax({
        url: 'loadCourses.php',
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