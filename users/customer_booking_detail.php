<html>
<head>
<?php //include 'menu1.php';?>



</head>
<a class="back" href="client_requests.php">Back</a>
<body>




<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
	</script>
    
	<div class="move">			<?php
						include '../includes/config.php';
					
$sel = "SELECT * FROM booking WHERE book_id ='$_GET[id]'";
$rs = $conn->query($sel);
$rws = $rs->fetch_assoc();
							
			?>
			<div class="bothimage">
<div class="image1">
				
						<img class="thumb" src="../cars/<?php echo $rws['Identity'];?>" width="300" height="200">
					
					<br>
					Id Card	
</div>
<div class="image2">					<img class="thumb" src="../cars/<?php echo $rws['Receipt'];?>" width="300" height="200"alt="Another Payment method is used!">

<br>
				Total Payment:	<span class="price"><?php echo $rws['Total_price'].' Birr';?></span>

				</div>
				</div>

					<?php


					///---------------------------this line should be condition for no or not self drive;

					
					$tt=$rws['self_drive'];


					if($tt=="no"){
?>
						<form action="" method="post">
<?php


$sel1 = "SELECT * FROM driver JOIN useraccount ON driver.Driver_id=useraccount.Acc_id  WHERE driver.status='free' AND useraccount.Statues='Active' ";
$rs1 = $conn->query($sel1);
?>
<br>
<div class="option">
Assign Driver for Customer:<select name="driver">
<?php
//$i=0;
while($rws1= $rs1->fetch_array()){
			//	echo $rws1[]
?>

       <option><?php echo $rws1[0] ?></option>
	   <?php 



 }
   ?>  
    </select><Br>
</div>
	<input class="button" type="submit"name="save" value="Confirm">


	</form>

			<?php
              if(isset($_POST['save'])){

				/*****
				 * 	<a href="javascript:sureToApprove(<?php echo $rws['book_id'];?>)" class="ico del">Confirm</a>
 */

$driver=$_POST['driver'];
					
 $code=rand(40000,90000);
//echo "$b"."hello";
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE booking SET status = 'Confirmed',Driver_id='$driver',Confirmation_no='$code' WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result == TRUE){
		$sel = "SELECT * FROM booking  WHERE book_id = '$id'";
		$rs = $conn->query($sel);
		$rws = $rs->fetch_assoc();
		 $carid=$rws['Car_id'];

		 
		 $qery=" UPDATE cars SET status = 'Unavailable' WHERE car_id='$carid'";
		 $resul = $conn->query($qery);
		 if($resul == TRUE){
/////////////

$elsa="UPDATE driver SET status='taken',assigned_car='$carid' WHERE Driver_id='$driver'";
$moges=$conn->query($elsa);
if($moges == TRUE)
{




//////////////
			echo "<script type = \"text/javascript\">
			alert(\"Request Confirmed !\");
			window.location = (\"client_requests.php\")
			</script>";		 }}
	?>
	<?php
	}



			  }

	}	
	
	
	if($tt=="yes"){
	//////////////////////////////////
		







?>

	<form action="" method="post">

	<?php

	

?>
<Br>
<input class="button" type="submit"name="save" value="Confirm">


</form>

	</div>
</li>
<?php
if(isset($_POST['save'])){



/*****
 * 	<a href="javascript:sureToApprove(<?php echo $rws['book_id'];?>)" class="ico del">Confirm</a>
*/
	
$code=rand(40000,90000);
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
////new code here 






////end new code


echo 'Request has Successfully been Approved';
}
?>

<meta content="4; client_requests.php" http-equiv="refresh" />
<?php
}
} ?>
<?php

}	

////////////////////////

	
		?>



	<script type="text/javascript">
		function sureToCancel(id){
			if(confirm("Are you sure you want to Cancel this Request?")){
				window.location.href ='delete.php?id='+id;
			}
		}
	</script>

<a class="button1" href="javascript:sureToCancel(<?php echo $rws['book_id'];?>)" class="ico edit">Cancel The Client Request</a>




</div>

</div>
</div>


</body>


</html>




<style>

body{

	background-color:#DCDCDC;


}
form{

margin: left 20px;


}
.move{
position: relative;
/*
border: 1px solid #ccc;
*/
margin-top:5%;
height:65%;
width:75%;
margin-left:10%;
background-color:#DCDCDC;


}
.bothimage{

display:flex;
flex-direction:horizontal;
margin-top:10%;

justify-content: center;

position: relative;


}
.image1{

	
}

.image1:hover{
	transform: scale(2);

}


.image2{



}
.image2:hover{
	transform: scale(2);

}

.button{

background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 21%;
  margin-left:24%;
  text-decoration:none;

}
.button1{


	background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin-left:15%;
  margin-bottom:15%;

  border: none;
  cursor: pointer;
  width: 21%;
  margin-left:24%;
  text-decoration:none;

}

.back{


	background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 21%;
  text-decoration:none;


}
.option{


	margin-left:30%;
}

</style>