<html>


<html lang="en">
<head>
	<title>Organizations home page </title>
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
  <a class="active" href="managerindex.php">Home</a>
  <a href="post_notice.php">Notice Announce</a>
  <a href="view_report.php">View Report </a>
  <a href="manager_change_pass.php">Change password </a>

  <a href="manager_view_feedback.php">Feedback {<?php
include '../includes/config.php';
$sel = "SELECT * FROM feedback";
$log = $conn->query($sel);
 $num = $log->num_rows;
$row = $log->fetch_assoc();
if($num > 0){
?>
	<?php  echo $num;}?> }

  <a href="logout.php">Logout</a>
</div>


</head>
