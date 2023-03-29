<!DOCTYPE html PUBLIC >
<html >
<head>

	<title></title>
	<link rel="stylesheet" href="css/style1.css">
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>


<?php
			include 'menu1.php';


		?>

</head>
<body>

		
<section class="mv_table">

						
						

					<div class="tabl">
						<table class="table" width="90%">
							<tr>
								<th width="13"></th>
								<th>Car Name</th>
								<th>Car Brand</th>
								<th>Price per Day</th>
								<th width="110" class="ac">Actions </th>
								<th></th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars /* WHERE status = 'Available'*/ ORDER BY car_id  DESC";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td></td>
								<td><h3><a href="#"><?php echo $row['CarName'] ?></a></h3></td>
								<td><?php echo $row['CarBrand'] ?></td>
								<td><a href="#"><?php echo $row['PricePerDay'] ?></a></td>
								<td><a href="update_cars.php?idd=<?php echo $row['car_id'] ?>">update</a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del"> Delete</a><!--<a href="#" class="ico edit">Edit</a> --></td>
							</tr>
							<?php
								}
							?>
						</table>
<br><br>
							
<center>
						<a  href="add_cars.php" class="moves"><img src="../img/plus.png">Add New Car</a>
						</center>

						</div>



		
	
							</section>
</body>
</html>



<style>

.moves{

	background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
margin-top:40%;
  cursor: pointer;
  width: 20%;
margin-left:10%;
 }


<style>


.mv_table{

margin-top: 30%;
}
/*
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left:25%;
  margin-top:10%;
  position: fixed;

}

*/
 td,  th {
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.tabl{

	margin-top: 10%;
	margin-left:30%;
position: fixed;
width: 70%;
}

body{

position: relative;

}
</style>