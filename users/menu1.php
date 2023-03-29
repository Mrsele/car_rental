
<html>
<head>
<link rel="stylesheet"href="css/style1.css">
<head>
	<body>
<?php
	error_reporting("E-NOTICE");
?>
<?php

session_start();
if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
	header("location: userindex.php");

}		

?>

           <div class="side_menu">	
			<div class="brand_name">
				<h1>Officer:<?php 
session_start();

$dr=$_SESSION['uname'];
echo $dr;

?></h1><br>
				</div><br><br><br><br><br><br>


				<ul>
			    <a href="officerindex.php"><img src="../img/hm.png">Dashboard</a>
			   <a href="add_vehicles.php"><img src="../img/car.png">Manage Cars</a>
			    <a href="client_requests.php"><img src="../img/is.png">ClientsRequests</a>
			   <a href="generatereport.php"> <img src="../img/pp.png">Generate Report</a>
			    <a href="add_driver.php"> <img src="../img/dr.png">Manage driver</a>
				<a href="confirmreturnedcar.php"> <img src="../img/cr.png"> Returned cars</a>
				<a href="Changpass.php"> <img src="../img/ps.png">Change Password</a>
				<a href="offviewnotice.php"> <img src="../img/ntc.png">View Notice</a>

				<a href="logout.php">  <img src="../img/lg.png">Logout</a>

			</ul>
			</div>

			<div class="container">
             <div class="header">
			<center> <h1>Fasilo Online Car Rantals</h1><Center>

            	<div class="nav">

	      </div>
         </div>

		</div>

</body>

			</html>

			