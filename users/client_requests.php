
<html >
<head>

	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />



	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
	</script>



	<script type="text/javascript">
		function sureToDelete(id){
			if(confirm("Are you sure you want to delete this request?")){
				window.location.href ='delete.php?id='+id;
			}
		}
	</script>


<?php
			include 'menu1.php';


		?>

</head>

<style>



.mv_table
{



}
.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left:25%;
  margin-top:10%;
  position: fixed;

}

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


</style>
<body>
	
<a href="index.php">Dashboard</a>
<section class="mv_table">
			

			<div class="tabl">
				<table class="table" width="70%">
							<tr>
								<th width="13"></th>
								<th> Email</th>
								<th>Phone numeber</th>
								<th> CarName</th>
								<th>Pick Date</th>
								<th>Return Date</th>

								<th> Status</th>
							<!--	<th width="110" class="ac">Actions</th> -->
								<th width="110" class="ac">Manage Detail</th>

							</tr>
							<?php

//SELECT * FROM jokes WHERE date > DATE_SUB(NOW(), INTERVAL 1 MONTH) ORDER BY score DESC;

								include '../includes/config.php';
								$select = "SELECT booking.book_id,booking.userEmail,booking.phone,cars.CarName,booking.PickUpDate,booking.ReturnDate,booking.status
										FROM booking JOIN cars ON booking.Car_id=cars.car_id ORDER BY book_id DESC"  ;
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							<td><h3><?php echo $row['book_id'] ?></h3></td>
								<td><h3><?php echo $row['userEmail'] ?></h3></td>
								<td><h3><a href="#"><?php echo $row['phone'] ?></a></h3></td>
								<td><?php echo $row['CarName'] ?></td>
								<td><a href="#"><?php echo $row['PickUpDate'] ?></a></td>
								<td><a href="#"><?php echo $row['ReturnDate'] ?></a></td>

								<td><a href="#"><?php echo $row['status'] ?></a></td>

							<!--	<td><a href="javascript:sureToApprove(<?php echo $row['book_id'];?>)" class="ico del">Confirm</a>-->
								<td><a href="customer_booking_detail.php?id=<?php echo $row['book_id'] ?>" class="ico del">Detail</a>
								</td>
							</tr>
							<?php
								}
							?>
						</table>

	
</body>
</html>
