<script src="<?php echo WEB_ROOT; ?>js/jquery-1.11.1.min.js"></script>
<tr> 
     <td class="contentArea"> <form method="post" action="" name="frmLogin" id="frmLogin">
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: Fill in the Matric number::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"></div>

		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
          
           <tr>
             <td align="right">Matric /Reg No.</td>
             <td align="center">:</td>
             <td><input required name="matric" type="text" class="box" id="txtUserName" size="30" maxlength="40"></td>
           </tr>

            <tr>
             <td align="right">Level/Semester.</td>
             <td align="center">:</td>
             <td>
             <select name="" id="semsYear">
              <option value="choose">--Choose--</option>
              <option value="all">All</option>
              <option value="specific">Specific</option>
              </select>
             </td>
           </tr>

        
         <tr class="others" style="display:none">
             <td align="right">Level.</td>
             <td align="center">:</td>
             <td>
             <select name="level" id="level">
              <option value="choose">--Choose a level--</option>
              <option value="100">100</option>
             <option value="200">200</option>
             <option value="300">300</option>
             <option value="400">400</option>
              </select>
             </td>
           </tr>

            <tr class="others" style="display:none">
             <td align="right">Semester.</td>
             <td align="center">:</td>
             <td>
             <select name="sems" id="sems">
              <option value="choose">--Choose a semester--</option>
              <option value="first">First Semester</option>
             <option value="second">Second Semester</option>
              </select>
             </td>
           </tr>
       
          
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td colspan="2">&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           
            <td colspan="2">&nbsp;</td>
            <td><input name="submit" type="submit" id="btnLogin" value="Submit" style="font-size:14px;color:#0066FF;padding:5px 8px;"></td>
           </tr>
          </table></td>
        </tr>
        <script>
        $(document).ready(function() {
            $("#semsYear").on('change', function() {
                let value = $(this).val();
                if (value == 'all') {
                  $(".others").hide();
                  $("#frmLogin").attr('action', "<?php echo WEB_ROOT; ?>resultPageS_employee.php");
                }
                else {
                  $(".others").show();
                  $("#frmLogin").attr('action', "<?php echo WEB_ROOT; ?>resultPageS_employee_indi.php");
                }
              //  switch(value) {
              //      case 'all':
              //      $("#frmLogin").attr('action', "<?php echo WEB_ROOT; ?>resultPageS_employee.php");
              //      break;
              //      default:
              //      $("#frmLogin").attr('action', "<?php echo WEB_ROOT; ?>resultPageS_employee_indi.php");
              //      break;
              //  }
            })
        })
        </script>