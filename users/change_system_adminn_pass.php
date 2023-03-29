<html lang="en">
<head>
	<title>Car Rental</title>



	<link rel="stylesheet"href="css/main.css">

  <?php
    include 'header.php';
  ?>
</head>
<body>

  <center>
<h1>Change Your password</h1>
  </center>

<div style="text-align:center">
  <form  method="post">
    OLd password<input type="password" class="inputer" placeholder="Enter Your OLd Password"name="oldpass" required><br><br>

    New Password<input type="password" class="inputer"placeholder="Enter new password"name="newpass" required><br><br>
   Confirm Pass<input type="password" class="inputer" placeholder="Conform Password" name="confrirmpass"required><br><br>
   <input type="submit" class="buttons" value="SaveChanges" name="save">
</form>
<?php
if(isset($_POST['save'])){
	include 'includes/config.php';
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$confirmpass=$_POST['confrirmpass'];



if($newpass!=$confirmpass){
  echo "<script type = \"text/javascript\">
        alert(\"Your Password Doesn't match\");
        window.location = (\"changepass.php\")
        </script>";



}else{
	 $result2 = "SELECT pass FROM customers WHERE pass ='$oldpass'";

   $rs = $conn->query($result2);
    //$num = $rs->num_rows;
   $row = $rs->fetch_assoc();

    if($row>0){



      $qry = "UPDATE customers SET pass = '$newpass' WHERE pass = '$oldpass'";
      $result = $conn->query($qry);
//
		  if($result == TRUE){
        echo "<script type = \"text/javascript\">
              alert(\"Password changed successfully\");
              window.location = (\"index.php\")
              </script>";
      }
//
			else{
        echo "<script type = \"text/javascript\">
              alert(\"Failed Try Again\");
              window.location = (\"changepass.php\")
              </script>";
      }
    }



    }
}



 ?>
</div>
</body>



</html>
