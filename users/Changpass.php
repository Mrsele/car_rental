<html lang="en">
<head>
	<title>Car Rental</title>



	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <a class="button" href="officerindex.php">Back</a>

  <?php
    //	include 'menu1.php';
  ?>
</head>
<body>

<br><br><Br><br><Br><br><br><br><br><br>
  <center>
<h1>Change Your password</h1><br>
  </center>
<div style="text-align:center">
  <form  method="post" style="color:white">
   <h3> OLd password:<input type="password" placeholder="Enter Your OLd Password"name="oldpass" required><br><br></h3>

    <h3>New Password:<input type="password"placeholder="Enter new password"name="newpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br><br></h3>
   <h3>Confirm Pass:<input type="password"placeholder="Conform Password" name="confrirmpass"required><br><br></h3>
   <input class="button" type="submit" value="SaveChanges" name="save">
</form>
<?php
if(isset($_POST['save'])){
		include '../includes/config.php';
$oldpass=md5($_POST['oldpass']);
$newpass=md5($_POST['newpass']);
$confirmpass=md5($_POST['confrirmpass']);



if($newpass!=$confirmpass){
  echo "<script type = \"text/javascript\">
        alert(\"Your Password Doesn't match\");
        window.location = (\"changpass.php\")
        </script>";



}else{
	 $result2 = "SELECT Password FROM useraccount WHERE password ='$oldpass' and Role='Lease_Offi'";

   $rs = $conn->query($result2);
    //$num = $rs->num_rows;
   $row = $rs->fetch_assoc();

    if($row>0){



      $qry = "UPDATE useraccount SET password = '$newpass' WHERE password = '$oldpass'";
      $result = $conn->query($qry);
      if($result == TRUE){
        echo "<script type = \"text/javascript\">
              alert(\"Password changed successfully\");
              window.location = (\"officerindex.php\")
              </script>";
      } else{
        echo "<script type = \"text/javascript\">
              alert(\"Failed Try Again\");
              window.location = (\"Changpass.php\")
              </script>";
      }
    }



    }
}



 ?>
</div>
</body>



</html>
<style>


input[type=text], input[type=password] {
  width: 30%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
 
.button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
body{
color:white;

}
</style>