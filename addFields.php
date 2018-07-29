<?php 
require_once './library/config.php';
require_once './library/functions.php';


$num = $_POST['num'];
$dept_id = $_POST['dept_id'];
$level = $_POST['level'];
$sems =$_POST['sems'];
?>
            <center>
            <form action="process.php?action=addCourses_admin" method="post">
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text entryTable">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <input type="hidden" name="dept_id" value="<?php echo $dept_id;?>">
            <input type="hidden" name="level" value="<?php echo $level;?>">
            <input type="hidden" name="sems" value="<?php echo $sems;?>">
            <?php $count=1;  for ($i = 1; $i<=$num; $i++){?>
                <tr class="entryTable">
                <td class="label">Course <?php echo $count?></td>
              <td class="content"><input name="name_<?php echo $count;?>" type="text" class="box" placeholder="Course code" id="" /> &nbsp;&nbsp;&nbsp;
              <input name="units_<?php echo $count;?>" type="number" class="box" id="" placeholder="Course units"/>
              </td>
              <input type="hidden" name="loop" value="<?php echo $count;?>">
            </tr>
                <?php  $count++; }?>
            
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
    
