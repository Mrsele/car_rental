<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "UPDATE booking SET status='Returned',Confirmation_no=null WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){


		
        $sel = "SELECT * FROM booking  WHERE book_id = '$id'";
		$rs = $conn->query($sel);
		$rws = $rs->fetch_assoc();
		 $carid=$rws['Car_id'];
        $driver=$rws['Driver_id'];
		$stat=$rws['self_drive'];

		 
		 $qery=" UPDATE cars SET status = 'Available' WHERE car_id='$carid'";
		 $resul = $conn->query($qery);
		 if($resul == TRUE){

if($stat=="no"){
$elsa="UPDATE driver SET status='free' WHERE Driver_id='$driver'";
$moges=$conn->query($elsa);
if($moges == TRUE)
{

         echo "<script type = \"text/javascript\">
			alert(\" Returned !\");
			window.location = (\"client_requests.php\")
			</script>";	
			 }		 }
			
			
			 echo "<script type = \"text/javascript\">
			 alert(\" Returned !\");
			 window.location = (\"client_requests.php\")
			 </script>";	
			}}
	
		
	
?>
