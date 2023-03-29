
<html lang="en">
<head>
	<title>Organizations home page </title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/style.css">


  <?php

session_start();
if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
  header("location: userindex.php");

}		

?>




    <div class="adminindexhead">
  <a  href="systemadminindex.php">Home</a>
  <a class="active" href="create_user_account.php">add user</a>
  <a href="Delete_user_account.php">Manager Acount </a>
  <a href="adminchangepass.php">change password </a>

  <a href="logout.php">Logout</a>
</div>


</head>

<body>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
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

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 100%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 20% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
position: fixed;
margin-left:30%;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.listbox{
width:100%;
height:50px;
border: 1px solid blue;
border-radius: 10px;
}
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<?php




?>
<h2></h2>

  <form class="modal-content" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create a user account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter username" name="username" required>

      <label for="psw"><b>password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">


      
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repassword" required>

      <label for="email"><b>email</b></label>
      <input type="text" placeholder="Enter email" name="email" required>

      

      <label for="psw-repeat"><b> Role</br></label>
    
      <select name="Role" class="listbox">
    <label><option value="Manager">Manager</option></label>
    <option value="Lease_Officer">Lease Officer</option>
    <option value="Driver">Driver</option>
    </select><Br><Br>

     


      <div class="clearfix">
 
        <button type="submit" class="signupbtn"  name="signup">Sign Up</button>







      </div>
    </div>
  </form>
</div>




<?php



          if(isset($_POST['signup'])){
            include '../includes/config.php';
          
            $Role=$_POST['Role'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
           $repassword=md5($_POST['repassword']);
            $email = $_POST['email'];
            //$phone = $_POST['phone'];
          ///////////////start



if($password!=$repassword){

	echo "<script type = \"text/javascript\">
									alert(\"Confirm password doesn't match!\");
									window.location = (\"create_user_account.php\")
									</script>";
}
else{





          $qy = "SELECT * FROM useraccount WHERE Username = '$username' ";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						
						echo "<script type = \"text/javascript\">
									alert(\"The Username is Already Existed use another one!\");
									window.location = (\"create_user_account.php\")
									</script>";
					} else{





          ///////////end

            $qry = "INSERT INTO useraccount (Username,Password,email,Role,Statues)
            VALUES('$username','$password','$email','$Role','Active')";
            $result = $conn->query($qry);
            if($result == TRUE){
              echo "<script type = \"text/javascript\">
                    alert(\"Successfully Registered.\");
                    window.location = (\"systemadminindex.php\")
                    </script>";
            } else{
              echo "<script type = \"text/javascript\">
                    alert(\"Registration Failed. Try Again\");
                    window.location = (\"create_user_account.php\")
                    </script>";
            }
          }
   }   }
?>


</body>



</html>