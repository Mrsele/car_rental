<!DOCTYPE html>
<html lang="en">
<head>
	<title> Cleint Signup </title>

  <link rel="stylesheet"href="css/main.css">

  
<body>

<?php
			include 'header.php';
		?>
  </head>
  
<style>
body {
  
  font-family: Arial, Helvetica, sans-serif;
  
}
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
input[type=text]:focus, input[type=password],input[type=file]:focus {
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
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
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
<center>
<h2>client Sign up form</h2>
</center>
  <form class="modal-content" method="POST" enctype="multipart/form-data">
    <div class="container">
      <p>Please fill in this form to create a user account.</p>
      <hr>
      <label for="username"><b>First Name</b></label>
      <input type="text" placeholder="Enter username" name="fname" required>

      <label for="username"><b>Last Name</b></label>
      <input type="text" placeholder="Enter username" name="lname" required>

      
      <label for="email"><b>email</b></label>
      <input type="text" placeholder="Enter email" name="email" required>


      <label for="psw"><b>password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">


      
      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repassword" required>

      <label for="image"><b>Photo</b></label>
      <input type="file"name="image" accept="image/*">
<br><br>

      <label for="Phone"><b>Phone</b></label>

<input type="text" placeholder="Enter phone number"onkeypress="isInputNumber(event)" name="phone" required>
<script>
      
      function isInputNumber(evt){
          
          var ch = String.fromCharCode(evt.which);
          
          if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
          
      }
      
  </script>


      <label for="psw-repeat"><b> Gender</b></label>
    
      <select name="gender" class="listbox">
    <label><option value="male">Male</option></label>
    <option value="Female">Female</option>
    </select><Br><Br>

     
    
    <label for="birth_date"><b>Birth date</b></label>

      <input type="date"  name="age" required>
      <script>
            
            function isInputNumber(evt){
                
                var ch = String.fromCharCode(evt.which);
                
                if(!(/[0-9]/.test(ch))){
                    evt.preventDefault();
                }
                
            }
            
        </script>
        <br>

      <label for="Adress"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>



      <label for="zip"><b>Zip</b></label>
      <input type="text" placeholder="Zip/postal code" name="zip" required>

<h2>Additional Security Question:</h2><br>
      <label for="question1">What is your favourite pet?<b></b></label>
      <input type="text" placeholder="Your answer" name="question1" required>


      <label for="question2"><b>what's your mother's Father Name ? </b></label>
      <input type="text" placeholder="your answer" name="question2" required>

      <label for="question3"><b>Add any security code you will remember ? </b></label>
      <input type="text" placeholder="your answer" name="question3" required>


      <div class="clearfix">
 
        <button type="submit" class="signupbtn"  name="signup">Sign Up</button>

      </div>
    </div>
  </form>
</div>

      <?php

          if(isset($_POST['signup'])){
            include 'includes/config.php';


            $target_path = "cars/";
            $target_path = $target_path . basename ($_FILES['image']['name']);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
            $image = basename($_FILES['image']['name']);


            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
           $password = md5($_POST['password']);
           $repassword = md5($_POST['repassword']);
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $address=  $_POST['address'];
            $registerdate= date("Y/m/d") ;
            $zip=$_POST['zip'];
            $question1=$_POST['question1'];
            $question2=$_POST['question2'];
            $question3=$_POST['question3'];

//////////////////////////////////////////////



$qy = "SELECT * FROM customers WHERE email = '$email' ";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						
						echo "<script type = \"text/javascript\">
									alert(\"The Email is Already Existed !\");
									window.location = (\"signup.php\")
									</script>";
					} else{



///////////////////////////////////////////////

if($password!=$repassword){

  echo "<script type = \"text/javascript\">
  alert(\" Confirm password Doesn't much.\");
  window.location = (\"account.php\")
  </script>";

}else{






$qry = "INSERT INTO customers (photo,Fname,Lname,email,pass,phone,gender,Birth_date,address,zip,question1,question2,question3,reistered_date)
            VALUES('$image','$fname','$lname','$email','$password','$phone','$gender','$age','$address','$zip','$question1','$question2','$question3','$registerdate')";
            $result = $conn->query($qry);
            if($result == TRUE){
              echo "<script type = \"text/javascript\">
                    alert(\"Successfully Registered.\");
                    window.location = (\"account.php\")
                    </script>";
         }  } } }else{
              echo "<script type = \"text/javascript\">
                    alert(\"Registration Failed. Try Again\");
                    window.location = (\"signup.php\")
                    </script>";
            
           
        }
      		  }		  ?>
          			</ul>
          		</div>
          	</section>
          </body>
          </html>