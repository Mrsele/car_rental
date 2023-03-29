
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/main1.css">



</head>
<body>

		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center"></h2>

<?php
	if($_SESSION['email'] && ($_SESSION['pass'])){
  ?>

<div class="action_userpage ">
<div class="profile_profile " onclick="menuToggle();">
<?php
  include 'includes/config.php';

  session_start();

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















	<section class="cars">
		<div class="car">
			<div>
			<ul class="">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available' ORDER BY car_id DESC";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
							
			?>
				<li >
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="" src="cars/<?php echo $rws['Image'];?>" width="300" height="200">
					</a>
					
					<span class="price"><?php echo $rws['PricePerDay'].' Birr';?></span>
					<div class="links">
						<h3 style="color:black;" >
							   <?php echo 'Car Name---->'.$rws['CarName'];?>
						</h3>
						<style>
h2{
	color:white;
}

						</style>
					<!--
						<h2> Car Brand: <span class="property_size"><?php echo $rws['CarBrand'];?></span></h2>
						-->
						<a href="carsdetail.php?id=<?php echo $rws['car_id'] ?>" class="cardetail">View Cars Detail=> </a>
				
						</div>

				</li>
			<?php
				}
			?>
			</ul>
		</div>
			</div>
	</section>
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


		<style>

body{
	/*background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url('img/45.jpg');
*/
color:black;
}

	


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
margin-top:-160px;
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
		
	</html>