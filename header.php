<html>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>

<header>

<style>

body{

	margin-top: 0;
    margin-left: 0;
	margin-right:0;

}
header{


    background-color:rgba(65, 91, 206, 0.815);
}
</style>

<img class="logocar"src="./img/b3.png" height="80"width="80">

			<div class="wrapper">
			

		
			
  <link rel="stylesheet"href="css/main.css">
  <br>


				<nav class="nav">

					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>


						<li><a href="index.php">Home</a></li>
						<li><a href="indexx.php">Car list</a></li>
						<li><a href="account.php"> Login</a></li>
						<li><a href="aboutus.php">About</a></li>

					</ul>


					<?php
					} else{
					?>
							<ul>
							
<li>

</li>
							
							
							    <li><a href="index.php">Home</a></li>
								<li><a href="indexx.php">Car list</a></li>
								<li><a href="status.php">MyBook </a></li>

								<?php
include 'includes/config.php';
$sel = "SELECT * FROM booking WHERE userEmail = '$_SESSION[email]'and status='Confirmed'";
$log = $conn->query($sel);
 $num = $log->num_rows;
$row = $log->fetch_assoc();
if($num > 0){
?>
								<li  class="dropdown"><a href=""><img src="img/rt.png"><?php  echo $num;?>
                             <li class="dropdown"><p>Your code-><?php echo $row['Confirmation_no']; }?></p></li></a></li>


								<li></li>
<li>


</li>
							</ul>

					<?php
						}
					?>
				</nav>
			</div>
		</header>
		<body></body>
</html>
<?php
						