<html lang="en">
<head>
	<title>Car Rental</title>



	<link rel="stylesheet"href="css/main.css">

  <?php
    include 'driver_head.php';

    session_start();
    $uname=$_SESSION['uname'];
    
  ?>
</head>

<style>

.changepassword{



}
.form{
 padding-top:15%;
 margin-left:40%;

}

</style>

<body>

<div class="changepassword" >
  <form  method="post" class="form">
  <h1>Change Your password</h1>
<?php
?>
    OLd password<input type="password"  placeholder="Enter Your OLd Password"name="oldpass" required><br><br>

    New Password<input type="password" placeholder="Enter new password"name="newpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" ><br><br>
   Confirm Pass<input type="password" placeholder="Conform Password" name="confrirmpass"required><br><br>
   <input type="submit" class="buttons" value="SaveChanges" name="save">
</div>
</form>
<?php
if(isset($_POST['save'])){
	include '../includes/config.php';
  /*  session_start();
    $uname=$_SESSION['uname'];      /*/
$oldpass=md5($_POST['oldpass']);
$newpass=md5($_POST['newpass']);
$confirmpass=md5($_POST['confrirmpass']);



if($newpass!=$confirmpass){
  echo "<script type = \"text/javascript\">
        alert(\"Your Password Doesn't match\");
        window.location = (\"manager_change_pass.php\")
        </script>";



}else{

	 $result2 = "SELECT Password FROM useraccount WHERE Password ='$oldpass' AND Username='$uname'";

   $rs = $conn->query($result2);
    $num = $rs->num_rows;
   $row = $rs->fetch_assoc();
    if($row>0){



      $qry = "UPDATE useraccount SET Password = '$newpass' WHERE Password = '$oldpass' AND Username='$uname'";
      $result = $conn->query($qry);
//
		  if($result == TRUE){
        echo "<script type = \"text/javascript\">
              alert(\"Password changed successfully\");
              window.location = (\"Driverindex.php\")
              </script>";
      }
//
			else{
        echo "<script type = \"text/javascript\">
              alert(\"Failed Try Again\");
              window.location = (\"driver_change_pass.php\")
              </script>";
      }
    }
else{

    echo "<script type = \"text/javascript\">
    alert(\"OLd password Wrong Try Again\");
    window.location = (\"Driverindex.php\")
    </script>";
}


    }
}



 ?>

</body>



</html>
<style>

/* Full-width inputs */
input[type=text], input[type=password],input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  position: relative;
}

.buttons {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
margin-left:10%;
}

body{

color:white;

}

</style>