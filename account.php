<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>



	<link rel="stylesheet"href="css/main.css">


</head>
<body style="background-image: #3d3d29">
<section class="">
		<?php
			include 'header.php';
		?>
<Br>
			<section class="caption">
				<h2 class="caption" style="text-align: center"></h2>
				<h3 class="properties" style="text-align: center"> </h3>
			</section>
	</section>





	<form action="" method="post">
  <div class="imgcontainer">
    <img src= img/mana.png alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b></b></label>
    <input type="email" placeholder="Enter email" name="email" required>
<br>
    <label for="psw"><b></b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" name="login">Login</button>
    <label>
	<br>
    </label>
  </div for="move">
  Don't have account<a href="signup.php">sign up here </a>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw"><a href="forgotpassword.php">Forgot password?</a></span>
  </div>
</form>














			<?php
			
				if(isset($_POST['login'])){
					include 'includes/config.php';

					if(!isset($_SESSION['attempt'])){
						$_SESSION['attempt'] = 0;
					}
					if($_SESSION['attempt'] > 5){
						$_SESSION['error'] = 'Attempt limit reach';
					}
					else{

					$email = $_POST['email'];
					$pass = md5($_POST['pass']);
					$qy = "SELECT * FROM customers WHERE email = '$email' AND pass = '$pass' ";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['pass'];
						unset($_SESSION['attempt']);

						echo "<script type = \"text/javascript\">
									alert(\"Login Successful\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"account.php\")
									</script>";
					}}
				}
				else{
					$_SESSION['error'] = 'Password incorrect';
					$_SESSION['attempt'] += 1;
					if($_SESSION['attempt'] == 5){
						$_SESSION['attempt_again'] = time();

						echo "<script type = \"text/javascript\">
						alert(\"So Many attempts try again\");
						window.location = (\"account.php\")
						</script>";
			
					}
			
			
			
				
			}
			?>
		

		<br>
		<br>
		<br>
		<br>
		<br>

		<br>
		<br>
		<br>
	</section>


		</body>
		</html>
<style>
			

body{
	
}

form {
  border: 3px solid #f1f1f1;
  width:50%;
  height:60%;
  margin-left:24%;
  background-color:;

}

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

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  
}

span.psw {
  
  padding-top: 16px;
  margin-left:24%;

}





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