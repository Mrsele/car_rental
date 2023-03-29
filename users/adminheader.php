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
  <a href="systemadminindex.php">Home</a>
  <a href="create_user_account.php">Add User</a>
  <a href="Delete_user_account.php">Manager Acount </a>
  <a href="backup.php">Back Data</a>

  <a href="adminchangepass.php">change password </a>

  <a href="logout.php">Logout</a>
</div>
</head>
</html>