<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilo Car rental</title>
<?php  include 'header.php'?>
</head>

<center>
<div class="moveon">
<h3>Enter The Confirmation Number to Cancel</h3>

    <form action="" method="post">
<input type="text"name="code"><br>
<input class="button" type="submit"name="cancel" value=" Continue to Cancel">

    </form>
    </div>
    </center>
<body>

    <?php

$id = $_GET['id'];

          if(isset($_POST['cancel'])){

    include 'includes/config.php';
    $code=$_POST['code'];

   // <meta content="4; status.php" http-equiv="refresh" />

//$id=$_GET['id'];
						$sel = "SELECT * FROM booking  WHERE book_id = '$id'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
                         $confirmationcode=$rws['Confirmation_no'];
                        // echo $confirmationcode;
			if($code==$confirmationcode){

	$id = $_REQUEST['id'];
	$query = "UPDATE booking SET status = 'Canceled',Confirmation_no=null  WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result == TRUE){

        $sel = "SELECT * FROM booking  WHERE book_id = '$id'";
		$rs = $conn->query($sel);
		$rws = $rs->fetch_assoc();
		 $carid=$rws['Car_id'];
         $driver=$rws['Driver_id'];

		 
		 $qery=" UPDATE cars SET status = 'Available' WHERE car_id='$carid'";
		 $resul = $conn->query($qery);
		 if($resul == TRUE){


			$elsa="UPDATE driver SET status='free' WHERE Driver_id='$driver'";
$moges=$conn->query($elsa);
if($moges == TRUE)
{




        echo "<script type = \"text/javascript\">
        alert(\" Request Canceled\");
        window.location = (\"status.php\")
        </script>";  
      }else{

        echo "Incorrect Confirmation Number";

      }
    
    }
	?>
	

	<?php
    }}}
?>



</body>
</html>

<style>

.moveon{

margin-top:20%;
}
.button {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

input[type=text], input[type=password] {
  width: 30%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px solid;
  background: ;
}

</style>