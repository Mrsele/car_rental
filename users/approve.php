<?php

$code=rand(40000,90000);
//echo "$b"."hello";
 




	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE booking SET status = 'Confirmed',Confirmation_no='$code' WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result == TRUE){
		$sel = "SELECT * FROM booking  WHERE book_id = '$id'";
		$rs = $conn->query($sel);
		$rws = $rs->fetch_assoc();
		 $carid=$rws['Car_id'];

		 
		 $qery=" UPDATE cars SET status = 'Unavailable' WHERE car_id='$carid'";
		 $resul = $conn->query($qery);
		 if($resul == TRUE){
		echo 'Request has Successfully been Approved';
		 }
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
