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
              <td class="label">&nbsp; GSS101</td>
              <td class="content"><input name="gss101" type="text" class="box" id="GSS101" value="<?php echo $gss101; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;GSS103</td>
              <td class="content"><input name="gss103" type="text" class="box" id="GSS103" value="<?php echo $gss103; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;PHY101</td>
              <td class="content"><input name="phy101" type="text" class="box" id="PHY101" value="<?php echo $phy101; ?>" size="15" maxlength="8" /></td>
            </tr>
            
            <tr class="entryTable">
              <td class="label">&nbsp;MTH131</td>
              <td class="content"><input name="mth131" type="text" class="box" id="MTH131" value="<?php echo $mth131; ?>" size="15" maxlength="8" /></td>
            </tr>
           <tr class="entryTable">
              <td class="label">&nbsp;CHM101</td>
              <td class="content"><input name="chm101" type="text" class="box" id="CHM101" value="<?php echo $chm101; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;CIS101</td>
              <td class="content"><input name="cis101" type="text" class="box" id="CIS101" value="<?php echo $cis101; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;MTH111</td>
              <td class="content"><input name="mth111" type="text" class="box" id="MTH111" value="<?php echo $mth111; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;PHY191</td>
              <td class="content"><input name="phy191" type="text" class="box" id="PHY191"  value="<?php echo $phy191; ?>"size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;BIO151</td>
              <td class="content"><input name="bio151" type="text" class="box" id="BIO151" value="<?php echo $bio151; ?>" size="15" maxlength="8" /></td>
            </tr>
            <tr class="entryTable">
              <td class="label">&nbsp;STA111</td>
              <td class="content"><input name="sta111" type="text" class="box" id="STA111" value="<?php echo $sta111; ?>" size="15" maxlength="8" /></td>
            </tr>
             <tr class="entryTable">
              <td class="content"><input name="type" type="hidden" id="TYPE" class="box" value="<?php echo $type; ?>" size="15" maxlength="8" /></td>
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
