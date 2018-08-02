<?php 
require_once './library/config.php';
require_once './library/functions.php';


$matric = $_POST['matric'];
$std_id = $_POST['std_id'];
$level = $_POST['level'];
$sems =$_POST['sems'];

//get courses the student has registered
$sql = "SELECT *, courses.units AS courseUnits, students_courses.id AS stdC_id, courses.id AS c_id FROM students_courses JOIN courses ON (students_courses.course_id = courses.id) WHERE courses.level = '$level' AND courses.semester = '$sems' AND matric = '$matric'";
$result = dbQuery($sql);
$sql2 = "SELECT name FROM std WHERE matric = '$matric'";
$result2 = dbQuery($sql2);
while($infoRow = dbFetchAssoc($result2)) {
    $name = $infoRow['name'];
}
?>
            <center>
            <h2>Course Scores for <?php echo ucwords($name)?></h2>
            <h3><?php echo $level?>L - <?php echo ucfirst($sems)?> Semester</h3>
            <form action="process.php?action=addGrade" method="post">
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text entryTable">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <input type="hidden" name="matric" value="<?php echo $matric;?>">
            <input type="hidden" name="std_id" value="<?php echo $std_id;?>">
            <?php $count=1;  while ($rows = mysqli_fetch_array($result)){?>
              <input type="hidden" name="units_<?php echo $count;?>" value="<?php echo $rows['courseUnits'];?>">
                <tr class="entryTable">
                <td class="label">Course <?php echo $count?></td>
              <td class="content"><input disabled name="courses_id_<?php echo $count;?>" type="text" class="box" value="<?php echo $rows['name']; ?>" size="15" /> &nbsp;&nbsp;&nbsp;
              <input name="courses_id_<?php echo $count;?>" type="hidden" class="box" value="<?php echo $rows['stdC_id']; ?>"/>
              <input name="score_<?php echo $count;?>" type="number" class="box" id="" placeholder="Score"/>
              </td>
            </tr>
                <?php  $count++; }?>
                <input type="text" name="loop" value="<?php echo $count;?>">
            
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
         <?php ?>
    
