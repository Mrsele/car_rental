<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/main1.css">



</head>
<body class="carlist">

	<section class="link">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"></h2>

			</section>
	</section>


	<section class="">
		<div class="carlister">
			<ul >
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li >
				<center>
				<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['Image'];?>"width="400" height="300" border="2px"
>
</a>

					
					<span class="price"></span>
					<div class="property_details">
						<h1>
						<?php echo 'Car Name--->'.$rws['CarName'];?>
						</h1>
						<h2> Price per day: <span class="property_size"><?php echo $rws['PricePerDay'].' Birr';?></span></h2>

						<h2> Car Brand: <span class="property_size"><?php echo $rws['CarBrand'];?></span></h2>

						<h2> Fuel Type: <span class="property_size"><?php echo $rws['FuelType'];?></span></h2>
						<h2>Capacity of Car: <span class="property_size"><?php echo $rws['SeatCapacity'];?></span></h2>
						<h2> Model Of Year: <span class="property_size"><?php echo $rws['ModelOfYear'];?></span></h2>
						<h2> Plate Number: <span class="property_size"><?php echo $rws['PlateNumber'];?></span></h2>



					
						<a href="book_car.php?id=<?php echo $rws['car_id'] ?>" class="cardetail">Book Now  </a>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>
			</center>
			</Body>
			<html>
				<style>

.carlister{

	width: 80%;
    margin: 0 auto;
    position: relative;
    margin-top: 50px;
    float: left;
	text-decoration: none;

}



.carlister ul{

	color:white;
	list-style: none;
}
				</style>