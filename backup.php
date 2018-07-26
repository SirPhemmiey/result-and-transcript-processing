<?php

 $host="localhost";
  $uname="root";
  $pass="";
  $database = "project"; 
$connection=mysqli_connect($host,$uname,$pass)
or die("Database Connection Failed");
$selectdb=mysqli_select_db($connection, $database) or die("Database could not be selected"); 
$result=mysqli_select_db($connection, $database)
or die("database cannot be selected <br>");

function backup_db(){
/* Store All Table name in an Array */
$allTables = array();
$result = mysqli_query($connection, 'SHOW TABLES');
while($row = mysqli_fetch_row($result)){
     $allTables[] = $row[0];
}

foreach($allTables as $table){
$result = mysqli_query($connection, 'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($result);

$return.= 'DROP TABLE IF EXISTS '.$table;
$row2 = mysqli_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
$return.= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++) {
while($row = mysqli_fetch_row($result)){
   $return.= 'INSERT INTO '.$table.' VALUES(';
     for($j=0; $j<$num_fields; $j++){
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } 
       else { $return.= '""'; }
       if ($j<($num_fields-1)) { $return.= ','; }
     }
   $return.= ");\n";
}
}
$return.="\n\n";
}

// Create Backup Folder
$folder = 'DB_Backup/';
if (!is_dir($folder))
mkdir($folder, 0777, true);
chmod($folder, 0777);
date_default_timezone_set('Afirca/lagos');
$date = date('m-d-Y-H-i-s', time()); 
$filename = $folder."db-backup-".$date; 

$handle = fopen($filename.'.sql','w+');
fwrite($handle,$return);
fclose($handle);
}

// Call the function
backup_db();
header("Location: view.php?mod=admin&view=vSDetails");
?>