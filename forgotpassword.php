<!DOCTYPE html>
<html lang="en">
<head>
	<title> Fasilo Car Rental</title>



	<link rel="stylesheet"href="css/main.css">


</head>
<body>
	





	<form action="" method="post">

  <div class="container">
  Enter Your Email<br>
    <label for="uname"><b></b></label>
    <input type="email" placeholder="Enter email" name="email" required>
<br>
<h2>Plase Answer the following Question</h2>

<br>
      <label for="question1">What is your favourite pet?<b></b></label><br>
      <input type="text" placeholder="Your answer" name="question1" required><br>


      <label for="question2"><b>what's your mother's Father Name ? </b></label><br>
      <input type="text" placeholder="your answer" name="question2" required><br>

      <label for="question3"><b>what was your security code ? </b></label><br>
      <input type="text" placeholder="your answer" name="question3" required><br>




Your New password:
    <label for="psw"><b></b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

    <button type="submit" name="reset">Reset password</button>
    <label>
	<br>
    </label>
  </div for="move">
  Log in<a href="account.php">  Go to login </a>

  </div>
</form>



			<?php
			
				if(isset($_POST['reset'])){
					include 'includes/config.php';

					$email = $_POST['email'];
					$pass = md5($_POST['pass']);

					$question1=$_POST['question1'];
					$question2=$_POST['question2'];
					$question3=$_POST['question3'];
					$qy = "SELECT * FROM customers WHERE email = '$email' AND question1='$question1' AND question2='$question2' AND question3='$question3' ";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						$try="UPDATE customers SET pass='$pass' WHERE email='$email'";
						$tuntun=$conn->query($try);
						if($tuntun==TRUE){

						echo "<script type = \"text/javascript\">
									alert(\" Password has Successfully Changed \");
									window.location = (\"account.php\")
									</script>";
					} 						}
					else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"forgotpassword.php\")
									</script>";
					}
				}
			?>
		

		
	


<style>
			
/* Bordered form */

body{
background:linear-gradient(
	to right bottom,
	rgba(0,255,0,0.3),
	rgba(255,255,255,0.3)
);

}

form {
  border: 3px solid #f1f1f1;
  width:60%;
  height:50%;
  margin-left:24%;
  background-color:gray;

}

/* Full-width inputs */
input[type=text], input[type=password],input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  position: relative;
  margin-left:24%;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left:24%;

}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 20%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  
}

/* The "Forgot password" text */
span.psw {
  
  padding-top: 16px;
  margin-left:24%;

}





/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>