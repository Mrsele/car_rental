
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
	session_start();
	// error_reporting("E-NOTICE");

?>
  <head>



<!-- Session started -->
    <meta charset="utf-8">
    <!--
    <link rel="stylesheet"href="css/main1.css">
    <link rel="stylesheet"href="css/sol.css">
    <title></title>
-->
</head>

<body>
  


<div class="banner">


<div class="navbar">
<img class="logo" src="img/b3.png" >



<?php
						if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
					?>
<ul>

						<li><a href="index.php">Home</a></li>
						<li><a href="indexx.php">Car list</a></li>
						<li><a href="account.php"> Login</a></li>
						<li><a href="aboutus.php">About us</a></li>
            </ul>

					<?php
					} else{
					?>
						<ul>

              <li><a href="index.php">Home</a></li>
								<li><a href="indexx.php">Car list</a></li>
								<li><a href="status.php">MyBook </a></li>
                <li><a href="aboutus.php">About Us</a></li>

								<?php
include 'includes/config.php';
$sel = "SELECT * FROM booking WHERE userEmail = '$_SESSION[email]'and status='Confirmed'";
$log = $conn->query($sel);
 $num = $log->num_rows;
$row = $log->fetch_assoc();
if($num > 0){
?>
								<li  ><a href=""><img src="img/rt.png"><?php  echo $num;?> </a></li>
                           <li class="dropdown"><p>Your code-><?php echo $row['Confirmation_no']; }?></p></li></a></li> 


							</ul>

					<?php
						}
					?>

</div>





<?php
	if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
  ?>

<div class="action_userpage ">
<div class="profile_profile " onclick="menuToggle();">
<?php
  include 'includes/config.php';



$email=$_SESSION['email'];
$select = "SELECT * from customers WHERE email='$email' ";
        $result1 = $conn->query($select);
        $row = $result1->fetch_assoc();
          ?>
    <img src="cars/<?php echo $row['photo'];?>"width="30" height="20">

</div>




<div class="menu_users">
<ul>
<li>


          <li><img src="img/mana.png"><a href=""><?php echo $row['Fname']."," ;echo $row['Lname']; ?></a></li>
<?php
     //   }
?>

</li>
<li><a href="changepass.php">change password</a></li>

<li><a href="logout.php">logout</a></li>

</ul>
</div>
</div>
<script>

function menuToggle(){
    const toggleMenu = document.querySelector('.menu_users');
    toggleMenu.classList.toggle('active')
}

</script>

<?php
	}
?>


























<div class="content">
<h1>Fasilo Car Rental Organization</h1>
<p>Making life easier by renting a car online through internet access </p>
<br>

<form action="search.php" method="post">
<input class="" type="text" name="search" placeholder="  enter the car name" width=100%><br>
<br>

<input class="herobtn" type="submit" name="ssearch" value="Search for Cars">
</form>
</div>

</div>

</body>
<!--footer-->

<footer>
<div class="footer">
<div class="footer_content">

<div class="footer-section-about">
 <h2> Our Social Medias</h2>
  <ul>
<li><a href="http://facebook.com">Facebook</a></li>
<li><a href="http://www.instagram.com">instagram</a></li>
<li><a href="http://www.twitter.com">twitter</a></li>  
<li><a href="https://web.telegram.org/z/"></a>telegram</li>
</ul>
</div>
<div class="footer-section-links"></div>
<div class="footer-section-contact-form">


<form class="feedback"action="" method="post">
<input class="emailsend" type="email" name="email" required placeholder="Enter Your Email"><br>
<textarea rows="10" cols="60" name="feedback" placeholder="Enter the Feedback "></textarea><br><br>

<input class="btnsend" type="submit" value="Send feedback" name="send">
</form>

<?php
if(isset($_POST['send'])){

	include 'includes/config.php';
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$date=date('y-m-d');



$qry = "INSERT INTO feedback (Email,Message,DateOfSend,status)
VALUES('$email','$feedback','$date','Unread')";
$result = $conn->query($qry);
if($result == TRUE){
  echo "<script type = \"text/javascript\">
        alert(\"feedback is Sent !\");
        window.location = (\"index.php\")
        </script>";
} else{
  echo "<script type = \"text/javascript\">
        alert(\"Registration Failed. Try Again\");
        window.location = (\"index.php\")
        </script>";
}
}


?>


</div>

</div>


<div class="footer_bottom"> 
	&copy;Fasilo CarRental Company    </div>
</div>
</footer>
<!--footer-->

</html>


<style>

*{
margin:0;
padding:0; 



}

.banner{

width: 100%;
height:110vh;
background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url('img/boj.jpg');
background-size:cover;
background-position:center;
}

.navbar{
  width:85%;

  margin:auto;

  padding:30px 0;
  display:flex;
  align-items:center;

  justify-content:center;
 

}



.logo{

width:150px;
cursor:pointer;


}


.navbar ul li  {
list-style:none;
display:inline-block;
margin:0 40px;
position: relative;

}

.navbar ul li a{

text-decoration:none;
color:#fff;
text-transform:uppercase;
font-weight:bold;

}
.navbar ul li::after{

content:'';
height: 3px;
width:0%;
background:#009688;
position:absolute;
left:0;
bottom: -10px;
transition: 0.5s;

}
.navbar ul li:hover:after{

width:100%;



}
.content{

width:100%;
position:absolute;
top:70%;
transform:translateY(-50%);
text-align:center;
color:#fff;


}
.content p{

  margni:20px auto;
  font-weight:100;
  line-height:25px;
}

.herobtn{

display: inline-block;
text-decoration: none;
color: #fff;
border: 1px solid #fff;
padding: 12px 34px;
font-size: 13px;
background: transparent;
position: relative;
cursor: pointer;


}
.herobtn:hover{

  border:1px solid #f44336;
  background: #f44336;
  transition: 1s;
}

input[type=text]{
  width: 30%;
  padding: 13px;
  margin: 1px 0 5px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius:20px;

}


/* profile ********************************/



.action_userpage{

position: fixed;
top: 20px;
right: 30px;
}

.action_userpage .profile_profile{
position: relative;
width: 60px;
height: 60px;
border-radius: 50%;
overflow: hidden;
cursor: pointer;
}


.action_userpage .profile_profile img{


position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
object-fit: cover;

}

.action_userpage .menu_users{

position: absolute;
top: 120px;
right: -10px;
padding: 10px 20px;
background: #fff;
width: 200px;
box-sizing: 0 5px 25px rgba(0,0,0,0.1);
border-radius: 15px;
transition: 0.5s;
visibility: hidden;
opacity: 0;
}
.action_userpage .menu_users.active
{
  top: 80px;

  visibility: visible;
  opacity: 1;

}


.action_userpage .menu_users:before{
content: '';
position: absolute ;
top: -5px;
right: 20px;
width: 15px;
height: 20px;
background: #fff;
transform: rotate(45deg);
}

.action_userpage .menu_users ul li{


  list-style: none;
  padding: 10px 0;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  display: flex;
  align-items: center;
  justify-content: center;
}

.action_userpage .menu_users ul li img{

max-width: 20px;
margin-right: 20px;
opacity: 0.5;
transition: 0.5s;
}

.action_userpage .menu_users ul li:hover  img
{


opacity: 1;

}

.action_userpage .menu_users ul li a {
  display: inline-block;
  text-decoration: none;
  color: #555;
  font-weight: 500;
  transition: 0.5s;

}
.action_userpage .menu_users ul li:hover a{

color: #ff5d94;



}


/* end of profiles*/



/***********************footer******************** */
.footer{

background:#303036;

color:#d3d3d3;
height: 400px;
}

.footer .footer-content{
border: 1px solid red;
height:350px;
}

.footer .footer-bottom{
background:#343a40;
color:#686868;
height: 50px;
/*width:100%;*/
text-align:center;
position: relative;
bottom:0%;
left: 20px;
padding-top:70px;
}
.feedback{
padding:4px;
float: right;
margin-top:-20px;
background:#303036;


}
.btnsend{

  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left:24%;


}


.emailsend{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  position: relative;
  /*margin-left:10%;   */
  font-size:16px;

}

.footer-section-about{

/*position: fixed;*/
bottom:40%;
margin-left:20%;
font-size:20px;
padding: 20px 18px;


}

.footer-section-about ul{

list-style:none;

}
.footer-section-about ul li a{
  text-decoration:none;

color:white;



}
/***************footer*************/

</style>