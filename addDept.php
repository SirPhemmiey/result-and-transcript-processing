<?php
// require_once 'library/config.php';
// require_once 'library/functions.php';



?>
    <tr> 
     <td class="contentArea"> <form method="post" action="process.php?action=addDept" name="frmLogin" id="frmLogin">
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeader"> 
         <td>:: Add Department::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"></div>

		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
          
           <tr>
             <td align="right">Name of department.</td>
             <td align="center">:</td>
             <td><input name="department" type="text" class="box" id="txtUserName" size="30" maxlength="40"></td>
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
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>