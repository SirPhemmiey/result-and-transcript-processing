<?php 
require_once './library/config.php';
require_once './library/functions.php';

$dept_id = $_POST['dept_id'];
$level = $_POST['level'];
$sems = $_POST['sems'];
 $sql = "SELECT *, courses.name as CoursesName FROM department JOIN courses ON                      (department.id =  courses.department_id) WHERE department.id =                    '$dept_id' AND courses.level = '$level' AND courses.semester                      ='$sems'";
 $result = dbQuery($sql);
?>
         <?php //if (mysqli_num_rows($result) == 1) {?>
            <center>
            <form action="process.php?action=addCourses" method="post">
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            
            <?php $count=1;  while($rows = dbFetchAssoc($result)) {?>
                <tr class="entryTable">
                <td class="label">Course <?php echo $count?></td>
              <td class="content"><input disabled name="course_<?php echo $count;?>_<?php echo $rows['id']; ?>" type="text" class="box" id="GSS101" value="<?php echo $rows['CoursesName']; ?>" size="15" maxlength="8" /></td>
              <input name="course_<?php echo $count;?>_<?php echo $rows['id']; ?>" type="hidden" value="<?php echo $rows['id']; ?>" />
              <input type="hidden" name="loop" value="<?php echo $count;?>">
            </tr>
                <?php $count++; }?>
            
            <tr>
              <td width="200">&nbsp;</td>
              <td width="372">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input name="btnLogin" type="submit" id="btnLogin" value="ADD COURSES">
             </td>
            </tr>
        </table></td>
          </form>
            </center>
         <?php //} else {?>
         <!-- <center><p>There are no courses added </p></center> -->
         <?php //}?>
    
