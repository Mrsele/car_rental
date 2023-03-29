<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="css/style.css">

    <?php include 'adminheader.php' ;
     session_start();
     $uname=$_SESSION['uname'];
     
   ?>
 </head>
 
 <style>
  body{

    color:white;
  }
 
 .changepassword{
 
 
 
 }
 .form{
  padding-top:15%;
  margin-left:40%;
 
 }

 /* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
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
 
 </style>
 
 <body>
 
 <div class="changepassword" >
   <form  method="POST" class="form">
   <h1>Change Your password</h1><br>
 <?php
 ?>
  <h2>   Old password</h2><input type="password"  placeholder="Enter Your Old Password"name="oldpass" required><br><br>
 
  <h2>   New Password</h2><input type="password" placeholder="Enter new password"name="newpass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br><br>
    <h2>Confirm Pass</h2><input type="password" placeholder="Conform Password" name="confirmmpass"required><br><br>
    <input type="submit" class="buttons" value="SaveChanges" name="save">
 </div>
 </form>
 <?php
 if(isset($_POST['save'])){
    include '../includes/config.php';
    session_start();
     $uname=$_SESSION['uname'];
 $oldpass=md5($_POST['oldpass']);
 $newpass=md5($_POST['newpass']);
 $confirmpass=md5($_POST['confirmmpass']);
 
 
 
 if($newpass!=$confirmpass){
   echo "<script type = \"text/javascript\">
         alert(\"Your Password Doesn't match\");
         window.location = (\"adminchangepass.php\")
         </script>";
 
 
 
 }else{
 
      $result2 = "SELECT Password FROM useraccount WHERE Password ='$oldpass' AND  Username='$uname'";
 
      $log = $conn->query($result2);
      $num = $log->num_rows;
      $row = $log->fetch_assoc();
      if($num > 0){
 
 
 
       $qry = "UPDATE useraccount SET Password = '$newpass' WHERE Password = '$oldpass' AND Username='$uname'";
       $result = $conn->query($qry);
 //
           if($result == TRUE){
         echo "<script type = \"text/javascript\">
               alert(\"Password changed successfully\");
               window.location = (\"systemadminindex.php\")
               </script>";
       }
 //
             else{
         echo "<script type = \"text/javascript\">
               alert(\"Failed Try Again\");
               window.location = (\"adminchangepass.php\")
               </script>";
       }
     }
 else{
 
     echo "<script type = \"text/javascript\">
     alert(\"OLd password Wrong Try Again\");
     window.location = (\"adminchangepass.php\")
     </script>";
 }
 
 
     }
 }
 
 
 
  ?>
 
 </body>
 
 
 
 </html>
 