<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/main.css">



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


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li >
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['Image'];?>" width="300" height="200">
					</a>
					
					<span class="price"><?php echo $rws['PricePerDay'].' Birr';?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Name------------------>'.$rws['CarName'];?></a>
						</h1>
					<!--
						<h2> Car Brand: <span class="property_size"><?php echo $rws['CarBrand'];?></span></h2>
						-->
						<a href="" class="cardetail">View Cars Detail=> </a>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>