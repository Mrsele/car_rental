<html>
<head>

<link rel="stylesheet"href="css/main.css">

</head>

<style>

body{
right:30%;

}
.button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}


</style>

<header>

<?php
			include 'header.php';
		?>
</header>
<Body>
<center><h2 >Payment detail</h2>


<h2>you have Total pay of : </h2>

<?php

include 'includes/config.php';

session_start();
$email=$_SESSION['email'];

$sel = "SELECT * FROM booking WHERE userEmail ='$email' and status='requesting' ORDER BY book_id DESC LIMIT 1";
$rs = $conn->query($sel);
$rws = $rs->fetch_array();

$returndate = $rws['ReturnDate'];
$pickdate=$rws['PickUpDate'];
$total=$rws['Total_price'];

///


/*


*/
$tt=$rws['self_drive'];
if($tt=="no"){


	$qr1="SELECT * FROM driver ORDER BY RAND()
	LIMIT 1";
	$r=$conn->query($qr1);
	$raw=$r->fetch_array();
	$driver_price=$raw['daily_payment'];
	$difference = floor(strtotime($returndate) - strtotime($pickdate))/(60*60*24);
	$total= $total + ($driver_price + $difference * $driver_price);

?>
	<h3>Payment for Driver:<?php echo $driver_price + $driver_price * $difference."\r\n Birr";?></h3>
<?php

	
?>
<h2> Total: <span class="property_size"><?php echo $total."\r\n Birr";?></span></h2>

<?php
////////////////////////
?>
<form action=""method="POST" enctype="multipart/form-data">
Please Upload the Reciept or screen shoot Image of your payment
<br>
<input type="file" name="image" accept="image/*" ><br>
<br><br>

<input class="button" type="submit" name="book" value="continue">
</form>
<?php
	if(isset($_POST['book'])){

		$target_path = "cars/";
		$target_path = $target_path . basename ($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

		$image = basename($_FILES['image']['name']);

  
		$qr = " UPDATE booking SET Receipt = '$image',Total_price='$total',status='requested' WHERE userEmail='$email'AND status='requesting'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Your request send successfully\");
											window.location = (\"status.php\")
											</script>";
									}
		}
								else 
								echo "<script type = \"text/javascript\">
											alert(\"Error\");
											window.location = (\"pay.php\")
											</script>";
								;
							}


		









///////////////////////////

}
if($tt=="yes"){
	?>

<h2> Total: <span class="property_size"><?php echo $total."\r\n Birr";?></span></h2>


<form action=""method="POST" enctype="multipart/form-data">
Please Upload the Reciept or screen shoot Image of your payment
<br>
<input type="file" name="image" accept="image/*" ><br>
<br><br>

<input type="submit" name="book" value="continue">
</form>
<?php
	if(isset($_POST['book'])){

		$target_path = "cars/";
		$target_path = $target_path . basename ($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

		$image = basename($_FILES['image']['name']);

		$qr = " UPDATE booking SET Receipt = '$image',status='requested' WHERE userEmail='$email'AND status='requesting'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Your request send successfully\");
											window.location = (\"status.php\")
											</script>";
									}
		}
								else 
								echo "<script type = \"text/javascript\">
											alert(\"Error\");
											window.location = (\"pay.php\")
											</script>";
								;
							}


		
		?>
		<?php

}
?>
</center>

</Body>


</html>