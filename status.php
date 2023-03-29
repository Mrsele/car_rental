<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">


</head>
<body>
<section class="">
		<?php
			include 'header.php';

		?>
	<div class="action_userpage ">
<div class="profile_profile " onclick="menuToggle();">
<?php
  include 'includes/config.php';

  session_start();

$email=$_SESSION['email'];
$select = "SELECT * from customers WHERE email='$email' ";
        $result1 = $conn->query($select);
        $row = $result1->fetch_assoc();
          ?>
    <img src="cars/<?php echo $row['photo'];?>"width="30" height="20">

</div>
<div class="menu_users">
<ul>
<li>


          <li><img src="img/mana.png"><a href=""><?php echo $row['Fname']."," ;echo $row['Lname']; ?></a></li>
<?php
     //   }
?>

</li>
<li><a href="changepass.php">change password</a></li>

<li><a href="logout.php">logout</a></li>

</ul>
</div>
</div>
<script>

function menuToggle(){
    const toggleMenu = document.querySelector('.menu_users');
    toggleMenu.classList.toggle('active')
}

</script>
<?php
	
?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center"></h3>
			</section>
	</section>


<center>
	<section class=" cv">
		<div class="">
		<h2 style="text-decoration:underline">Your Rent Status</h2>



			<ul class="">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM booking WHERE userEmail = '$_SESSION[email]' ORDER BY book_id DESC LIMIT 1 ";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();

						$driver=$rws['Driver_id'];
						$tt=$rws['self_drive'];
						$verifdate=$rws['registrered_date'];
						$today= date("Y/m/d") ;
						$difference = floor(strtotime($today) - strtotime($verifdate))/(60*60*24);


			?>
				<li>
						<h2><span style="font-size:25px; color: #FF0000">Your Request is :</span> <span style="color:#006988;
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
						<?php
if($rws['status']=="Confirmed"){
					
	if($tt=="no"){
					?>
		
			
<br><br>
		</div>
		<?php


$sel1 = "SELECT * FROM driver WHERE Driver_id = '$driver'";
						$rs1 = $conn->query($sel1);
						$rws1 = $rs1->fetch_assoc();

?>
<br>
<br><h2>Your Assigned Driver's phone Number: <i><span style="color:#006988;
						font-weight: bold; font-size: 25px;"><?php echo $rws1['phone'];?></span></i></h2>

<?php  if($difference <= 1){

?>
						<a href="clientcancelreservation.php?id=<?php echo $rws['book_id'] ?>">Cancel Booking</a>&nbsp;
		
						<?php  }?>
			<a href="return_a_car.php?id=<?php echo $rws['book_id'] ?>">Return a car</a>

						<?php
}if($tt=="yes"){
?>

<?php  if($difference <= 1){ ?>

	<a href="clientcancelreservation.php?id=<?php echo $rws['book_id'] ?>">Cancel Booking</a>&nbsp;
	<?php  }?>


	<a href="return_a_car.php?id=<?php echo $rws['book_id'] ?>">Return a car</a>
						<?php








}
}?>
	</section>
<center>
	
			
<style>

.cv ul {

list-style:none;

}

</style>