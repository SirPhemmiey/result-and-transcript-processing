<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:19px;
	z-index:1;
	left: 682px;
	top: 100px;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}


#Layer1 {
	position:absolute;
	width:708px;
	height:129px;
	z-index:1;
	left: 314px;
	top: 191px;
}

#Layer2 {
	position:absolute;
	width:975px;
	height:27px;
	z-index:2;
	left: 313px;
	top: 330px;
}

#link2{
	font-family: Courier New, Courier, monospace;
	font-size: 12px;
	color: #00CC00;
	font-weight: lighter;
	text-decoration: none;

}

a{
    color: #0072FF;
    text-decoration: none;
	font-weight: bold;
}

a:hover {
    text-decoration: none;
    color: #ff0000;
}
#con_name, #con_email, #con_website {
    width: 566px;
    height: 26px;
    padding-top: 0px;
    padding-left: 10px;
    padding-right: 10px;
    border: none;
    background: url(images/input_bg.jpg);
    background-repeat:no-repeat;
    background-position:left top;
    color: #000000;
    padding-bottom: 5px;
}

#login-submit, #contact-submit{
    width: 74px;
    height: 27px;
    background: url(images/send.png) no-repeat left top;
    border: none;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    font-weight: normal;
    color: #ffffff;
	padding-bottom: 5px;
}
#Layer3 {
	position:absolute;
	width:200px;
	height:25px;
	z-index:3;
	left: 313px;
	top: 365px;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

-->
</style>

<style type="text/css">
<!--
.title {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	text-decoration: none;
	color: #0000FF;
	font-weight: 100;
	text-transform: capitalize;
}

.snippet{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: lighter;
	letter-spacing: normal;
}

-->
</style>



<?php

/////////////////////////////////////////
$var=$_GET['q'];
			



///////////////////////////////////////////////

//specify how many results to display per page
//get the search variable from URL


//trim whitespace from the stored variable

//separate key-phrases into keywords
 $query_value = "SELECT title FROM project WHERE title like '%$var%'";  
    $num_value=  dbQuery($query_value);
    $row_linkcat= dbNumRows($num_value);

  while($row_linkcat){
	
	// EDIT HERE and specify your table and field unique ID for the SQL query
    
	
	//create summary of the long text. For example if the field2 is your full text grab only first 130 characters of it for the result
	$size = 300;
    $introcontent =$row_linkcat[ 'abstract'];

    //$introcontent = substr($introcontent, 0, 400)."...";	
	
	//now let's make the keywods bold. To do that we will use preg_replace function.
    //Replace field
      $title =$row_linkcat[ 'Title' ] ;
	  $supervisor =$row_linkcat[ 'supervisor' ] ;
	  $date =$row_linkcat[ 'date' ];
	  $name =  $row_linkcat[ 'Name' ];
      $desc =$introcontent;
      $link = $row_linkcat[ 'Title' ];
	  $matric = $row_linkcat[ 'matric' ];
	  
	  
		//format and display search results?>
          <table width="615" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <th scope="col"><div align="left" class="title" id="title"><a href="downloadfile.php?id=<?php echo "$matric"; ?>"><?php echo "$title"; ?> | <?php echo "$supervisor"; ?> | <?php echo "$date"; ?></a></div></th>
  </tr>
  <tr>
    <td><div align="left" class="snippet" id="snippet"><?php echo "$desc"; ?></div></td>
  </tr>
  <tr>

    <td><div align="left" class="link" id="link"><a id = "link2" href="downloadfileTEXT.php?id=<?php echo "$matric"; ?>"><?php echo "$link"; ?> | <?php echo "$name"; ?> | .doc version</a></div>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
 
    <?php }  //end foreach $newarr
 
  

?>
	  
