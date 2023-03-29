<html>
<head>

<link rel="stylesheet"href="css/main.css">

</head>
<Body>
<header>

<?php
			include 'header.php';
		?>
</header>



<center>
<h2 >Payment detail</h2>

<?php

$diffrence=$_GET['id'];

?>
<h2>You need Additionally Pay <?php  echo $diffrence?></h2>
<h2>you have Total pay of : </h2>

<?php
include 'includes/config.php';

session_start();
$email=$_SESSION['email'];


$sel = "SELECT * FROM booking WHERE userEmail ='$email'";
$rs = $conn->query($sel);
$rws = $rs->fetch_assoc();

?>
<h2> Total: <span class="property_size"><?php echo $rws['Total_price'];?></span></h2>


<form action=""method="POST" enctype="multipart/form-data">

<input type="file" name="image" accept="image/*" ><br>
<br><br>

<input class="button" type="submit" name="book" value="continue">
</form>

</center>
<?php
	if(isset($_POST['book'])){

		$target_path = "cars/";
		$target_path = $target_path . basename ($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

		$image = basename($_FILES['image']['name']);

		$qr = " UPDATE booking SET Receipt = '$image',status = 'Returning' WHERE userEmail='$email'";
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
</Body>


</html>



<style>

/* Set a style for all buttons */
.button{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.button:hover {
  opacity:1;
}



</style>