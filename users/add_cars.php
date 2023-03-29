
<!DOCTYPE html>
<html>
<head>
<?php

session_start();
if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
	header("location: userindex.php");

}		

?>

	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="header">
	<div class="shell">
	<?php
	include '../includes/config.php';
?>

		</div>
	</div>
</div>

<div id="container">
	<div class="shell">

		<div class="small-nav">
			<a href="officerindex.php">Dashboard</a>
			<span>&gt;</span>
			Add New Vehicles
		</div>

		<br />

		<div id="main">
			<div class="">&nbsp;</div>

			<div id="content">

				<div class="box" style="background-color:brown">
<center>						<h2>Add New Car</h2>
</center>

					<form action="" method="post" enctype="multipart/form-data">

						<div class="form">
								<p>
									<span class="req"></span>
									<label>Car name <span></span></label>
									<input type="text" class="field size1" name="CarName" required />
								</p>
								<p>
									<span class="req"></span>
									<label>CarBrand <span></span></label>
									<input type="text" class="field size1" name="CarBrand" required />
								</p>
								<p>
									<span class="req"></span>
									<label>Price per day <span></span></label>
									<input type="number" class="field size1" name="PricePerDay" required onkeypress="isInputNumber(event)" />
									<script>
      
      function isInputNumber(evt){
          
          var ch = String.fromCharCode(evt.which);
          
          if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
          
      }
      
  </script>
								
								
								</p>
								<p>
									<span class="req"></span>
									<label>Vehicle Image <span></span></label>
									<input type="file" class="field size1" name="image" required accept="image/*" />
								</p>
								<p>
									<span class="req">How many passengers ?</span>
									<label>Vehicle Capacity<span></span></label>
									<input type="text" class="field size1" name="SeatCapacity" required onkeypress="isInputNumber(event)"min="1" />
								</p>

								<p>
									<span class="req"></span>
									<label>Plate Number <span></span></label>
									<input type="text" class="field size1" name="PlateNumber" required />
								</p>


								<p>
									<span class="req"></span>
									<label>Car Color<span></span></label>
									<input type="text" class="field size1" name="CarColor" required />
								</p>

								<p>
									<span class="req"></span>
									<label>Fuel type<span></span></label>
									<select name="FuelType">

									<option value="Petrol">Petrol</option>
									<option value="Diesel">Diesel</option>
							        <option value="Natural Gas ">Natural Gas </option>
								    <option value="Bio-Diesel">Bio-Diesel</option>
								    <option value="Petroleum Gas">Petroleum Gas</option>
								</select>
								</p>

								<p>
									<span class="req"></span>
									<label>Model of year <span></span></label>
									<input type="number" class="field size1" name="ModelOfYear" pattern="\d{4}" onkeypress="isInputNumber1(event)" min="1990" required/>
								
									<script>
      
      function isInputNumber1(evt){
          
          var ch = String.fromCharCode(evt.which);
          
          if(!(/[0-9]/.test(ch))$$(/d{4}).test(ch)){
              evt.preventDefault();
          }
          
      }
      
  </script>
								
								</p>

								</div>

	<a href="add_vehicles.php" class="add-button"><span>Cars</span></a>


	<input type="submit" class="herobtn" value=" Add Cars" name="send" />

</form>
<?php
	if(isset($_POST['send'])){

		$target_path = "../cars/";
		$target_path = $target_path . basename ($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

		$image = basename($_FILES['image']['name']);
								$CarBrand=$_POST['CarBrand'];
								$PlateNumber=$_POST['PlateNumber'];
								$CarName=$_POST['CarName'];
								$CarColor=$_POST['CarColor'];
								$PricePerDay=$_POST['PricePerDay'];
								$FuelType=$_POST['FuelType'];
								$ModelOfYear=$_POST['ModelOfYear'];
								$SeatCapacity=$_POST['SeatCapacity'];
								






								$qr = "INSERT INTO cars (image, CarBrand,PlateNumber,CarName,CarColor,PricePerDay,FuelType,ModelOfYear,SeatCapacity,status)
													VALUES ('$image','$CarBrand','$PlateNumber','$CarName','$CarColor','$PricePerDay','$FuelType','$ModelOfYear','$SeatCapacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 
								echo "<script type = \"text/javascript\">
											alert(\"Error\");
											window.location = (\"add_vehicles.php\")
											</script>";
								;
							}
						?>
				</div>

			</div>

					</div>
				</div>
			</div>

			<div class="cl">&nbsp;</div>
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left"> Copy right reserved&copy; <?php echo date("Y");?> </span>
		<span class="right">
Fasilo Car Rental Organization		</span>
	</div>
</div>

</body>
</html>


<style>

body{

color:white;
background:url("../img/ww.jpg");

}


.herobtn{

display: inline-block;
text-decoration: none;
color: white;
border: 1px solid #fff;
padding: 12px 34px;
font-size: 13px;
background: transparent;
position: relative;
cursor: pointer;

background: green;
left:40%;

}

.herobtn:hover{

border:1px solid #f44336;
transition: 1s;
}
</style>