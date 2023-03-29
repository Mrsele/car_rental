
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/main1.css">



</head>
<body style="background-color:#b8b894">

		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"></h2>


			<?php

?>


<section class="cars">
<div class="car">
	<div>
	<ul class="">
		<?php
      if(isset($_POST['ssearch'])){
        //include 'includes/config.php';
        $search = $_POST['search'];
    $d=0;

						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE (CarName like '%$search%' or CarBrand like '%$search%') and  status = 'Available'ORDER BY car_id DESC ";
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
						<a href="carsdetail.php?id=<?php echo $rws['car_id'] ?>" class="cardetail">View Cars Detail=> </a>
					</div>
				</li>
			<?php
			$d=1;
		}
		if($d==0){
			echo "<script type = \"text/javascript\">
		        alert(\"No Such Cars Found\");
		        window.location = (\"index.php\")
		        </script>";



		}}
			?>
			</ul>
			</ul>
		</div>
			</div>
	</section>
			</body>
	</html>