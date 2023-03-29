<html>


<html lang="en">
<head>
	<title>Fasilo Car Renatl </title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/style.css">
    <?php
	error_reporting("E-NOTICE");
?>
<?php

	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: userindex.php");

	}		

?>

    <div class="adminindexhead">
  <a href="Driverindex.php">Home</a>
  <a href="view_assigned_car.php">View Assigned Car</a>
  <a href="view_notice.php">View notice </a>
  <a href="driver_change_pass.php">Change password </a>

  <a href="logout.php">Logout</a>
</div>


</head>
