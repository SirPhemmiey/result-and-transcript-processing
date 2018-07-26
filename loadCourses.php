<?php 
require_once './library/config.php';
require_once './library/functions.php';

$dept_id = $_POST['dept_id'];
$level = $_POST['level'];
$sems = $_POST['sems'];
//  echo $dept_id;
// echo $level;
// echo $sems;
 $sql = "SELECT *, courses.name as CoursesName FROM department JOIN courses ON                      (department.id =  courses.department_id) WHERE department.id =                    '$dept_id' AND courses.level = '$level' AND courses.semester                      ='$sems'";
 $result = dbQuery($sql);
 while($rows = dbFetchAssoc($result)) {
     echo $rows['CoursesName'];
 }
?>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            
            <tr class="entryTable">
              <td class="content"><input name="" type="text" class="box" id="GSS101" value="<?php echo $gss101; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" value="LOAD COURSES">
             </td>
            </tr>
        </table></td>
    </tr>
