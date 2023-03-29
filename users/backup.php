<?php
//session_start();
include '../includes/config.php';
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="">


</head>
<body>
	<center>
<?php
//{
  include('adminheader.php'); ?>

<div id="container">

	<div id="contentindex5">
<?php 

$tables = array();
$query = mysqli_query($conn,'SHOW TABLES');
while($row = mysqli_fetch_row($query))
{
     $tables[] = $row[0];
}

$result = "";
foreach($tables as $table)
{
$query = mysqli_query($conn,'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($query);

$result .= 'DROP TABLE IF EXISTS '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query($conn,'SHOW CREATE TABLE '.$table));
$result .= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++)
 {
while($row = mysqli_fetch_row($query))
{
   $result .= 'INSERT INTO '.$table.' VALUES(';
     for($j=0; $j<$num_fields; $j++)
     {
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if(isset($row[$j]))
       {
		   $result .= '"'.$row[$j].'"' ;
		}
		else
		{
			$result .= '""';
		}
		if($j<($num_fields-1))
		{
			$result .= ',';
		}
    }
   	$result .= ");\n";
}
}
$result .="\n\n";
}

//Create Folder
$folder = 'C:/xampp/htdocs/Final_Year_Project/backup/';
if (!is_dir($folder))
mkdir($folder, 0777, true);
chmod($folder, 0777);

//$date = date('m-d-Y-h-m-s');
$filename = $folder."backup";

$handle = fopen($filename.'.sql','w+');
fwrite($handle,$result);
fclose($handle);
?>
<br><br><br><br>
<div class="moves">
<h2>
	<?php

        echo "<script>alert('Database Backed Up Successfully!!!');</script>";
        echo "Database Backed Up Successfully!!!";
        echo "Path:$filename";
    ?>
</h2>
</div>

 </div>



</div>
</center>
<?php
/*}
else
header("location:../index.php");
*/?>.
</body>
</html>
<style>
*{

color:white;

}

body{
}
.moves{

margin-top:20%;
margin-left:20%;



}

</style>