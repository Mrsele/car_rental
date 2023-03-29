

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
<link rel="stylesheet"href="css/main1.css">

<script src="inlcudes/jquery.js"></script>
<?php
			include 'header.php';
		?>
</head>
<body>
<?php include 'includes/config.php'; 

//session_start();

?>

<div class="action_userpage ">
<div class="profile_profile " onclick="menuToggle();">
<?php
  //include 'includes/config.php';

//  session_start();

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


<script>
function text(x){


  if(x==0){document.getElementById("ma").style.display="block";
  document.getElementById("mb").style.display="none";
  }
else{ document.getElementById("ma").style.display="none";
document.getElementById("mb").style.display="block";
}
return;
}                  

</script>

 
  <style>
    body{
background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4, 9, 30, 0.7)),url("./img/ad.jpg");
color:white;
    }
.imagedisplay{
margin-top:3%;
float:right;
margin-right:15%;
list-style: none
}


.imagedisplay img{

border: 1px solid;

}
  





    
  </style>
<section >
	
  </div>
	<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
        
        echo "<script type = \"text/javascript\">
                    alert(\" Please Login first\");
                    window.location = (\"account.php\")
                    </script>";
        } else
          {
///forms 
//////////conditions 


include 'includes/config.php';

session_start();
$email=$_SESSION['email'];
$jossy = "SELECT * FROM booking WHERE userEmail ='$email' ORDER BY book_id DESC LIMIT 1";
$jo = $conn->query($jossy);
$ja = $jo->fetch_array();

$status = $ja['status'];
if($status=="requesting"){

  echo "<script type = \"text/javascript\">
  alert(\" Please complete previous transaction \");
  window.location = (\"pay.php\")
  </script>";

}
elseif(($status=="requested")||($status=="returning")||($status=="Confirmed")){


  echo "<script type = \"text/javascript\">
  alert(\" Please Your request has been Checked try Latter! \");
  window.location = (\"status.php\")
  </script>";

}
else{

///end up conditions

?>

<section class="caption">
				<h2 class="caption" style="text-align: center">Enter the booking details</h2>
			</section>
</section>
<section class="">
		<div class="">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
      	<div class="imagedisplay">

			<li >
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['Image'];?>" width="250" height="180">
					</a>
					
					<h3> price of Car:<?php echo $rws['PricePerDay'].' Birr';?></h3>
						
							<h3>Car Name:<?php echo $rws['CarName'];?></a></h3>
						
	
						<h3> Car Brand: <span class="prperty_size"><?php echo $rws['CarBrand'];?></span></h3>

          </div>
          </section>
        </div>
				</li>
  </div>
  </div>
<div>
</div>
<form class="booking_form" method="post" enctype="multipart/form-data">
  <div class="inside_booking_form"> 


  <?php
  /******************* */
  include 'includes/config.php';

$email=$_SESSION['email'];

$query = "SELECT * FROM customers WHERE email = '$email'";
$rs = $conn->query($query);
						$rws = $rs->fetch_array();

$age=$rws['Birth_date'];

$currentdate= date("Y/m/d") ;

    $difference = floor(strtotime($currentdate) - strtotime($age))/(60*60*24);
$actual_age=floor($difference/365);


/******************** */

if($actual_age < 23){


?>

<h2>Your Age is Below 22  Self drive Option is not Available</h2><Br>
Phone : <input type="text"class="the_input" placeholder="Enter phone number"onkeypress="isInputNumber(event)" name="phone" required>
<script>
      
      function isInputNumber(evt){
          
          var ch = String.fromCharCode(evt.which);
          
          if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
          
      }
      
  </script><br><br>
  
Pick up date<input id="date_picker3" type="date" class="the_input" name="pickup_date" min="<?php echo $e = date('Y-m-d'); ?>" placeholder="Calendar"><br>



Return Date<input id="date_picker4" type="date" class="the_input" name="return_date" min="<?php  echo $e+ date('Y-m-d'); ?>" placeholder="Calendar"> <br><br>

<script>
$(document).ready(function() {
  var startdate;
  var enddate;
$( "#date_picker3" ).datepicker({
dateFormat: 'dd-mm-yy'
});

$("#date_picker4").datepicker({
  dateFormat:'dd-mm-yy'
});
/////////////////

$('#date_picker3').change(function(){
startdate=$(this).datepicker('getDate');
$('#date_picker4').datepicker('option','minDate',startdate);

});
});



$('#date_picker4').change(function(){
enddate=$(this).datepicker('getDate');
$('#date_picker3').datepicker('option','maxDate',enddate);

});



</script>





your Id/Passport<input class="" type="file"name="image" accept="image/*"><br><br><br>

<input  class="the_button" type="submit" name="save" value="Submit">


<?php
///Below this is for the age >23

}
else{

  ?>


Phone : <input type="text"class="the_input" placeholder="Enter phone number"onkeypress="isInputNumber(event)" name="phone" required>
<script>
      
      function isInputNumber(evt){
          
          var ch = String.fromCharCode(evt.which);
          
          if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
          
      }
      
  </script><br><br>
  


Pick up date:<input  type="date" id="date_picker1" class="the_input" name="pickup_date" min="<?php echo date('Y-m-d'); ?>"  placeholder="Calendar"><br>
Return Date<input  type="date" id="date_picker2" class="the_input" name="return_date"min="<?php echo date('Y-m-d'); ?>" placeholder="Calendar" ><br>

<script>
$(document).ready(function() {
  var startdate;
  var enddate;
$( "#date_picker1" ).datepicker({
  dateFormat: 'dd-mm-yy'
});

$("#date_picker2").datepicker({
  dateFormat: 'dd-mm-yy'
});
/////////////////

$('#date_picker1').change(function(){
startdate=$(this).datepicker('getDate');
$('#date_picker2').datepicker('option','minDate',startdate);

});
});



$('#date_picker2').change(function(){
enddate=$(this).datepicker('getDate');
$('#date_picker1').datepicker('option','maxDate',enddate);

});



</script>

Self drive<input type="radio"name="license" value="yes" onclick="text(0)" >

needs a driver<input  type="radio"name="license" value="no"onclick="text(1)"><br>

<div id="ma">
Driving Licens<input class="" type="file"name="image1" accept="image/*"><br><br>
</div>


<div id="mb">
your Id/Passport<input class="" type="file"name="image" accept="image/*"><br><br>
</div>

<input  class="the_button" type="submit" name="save" value="Submit">

<?php

//


}
?>

</div>
</form>

</div>






<?php






if(isset($_POST['save'])){

 // min="<?php echo date('Y-m-d'); "
//min="<?php echo date('Y-m-d'); "

//session_start();
  $email=$_SESSION['email'];

$picture=$_POST['license'];
//echo $picture;
if($picture=="yes"){

/// Start of self drive 
$target_path = "cars/";
$target_path = $target_path . basename ($_FILES['image1']['name']);
if(move_uploaded_file($_FILES['image1']['tmp_name'], $target_path)){

$image1 = basename($_FILES['image1']['name']);

///rehvj



//end 


$sel = "SELECT * FROM cars WHERE car_id ='$_GET[id]'";
        $rs = $conn->query($sel);
        $rws = $rs->fetch_assoc();
        $price_per_day = $rws['PricePerDay'];

$pickup_date=($_POST['pickup_date']);
$return_date=($_POST['return_date']);
$registerdate= date("Y/m/d") ;

$difference = floor(strtotime($return_date) - strtotime($pickup_date))/(60*60*24);

$phone = $_POST['phone'];

$total_price = $price_per_day + ($difference * $price_per_day);

//echo $total_price."Helooo ";

$time1=strtotime($pickup_date);
$time2=strtotime($return_date);

if($time1>$time2){

?>
<center>
  <h2><span style="font-size:25px; color: #FF0000">Pick up date Must not bo Greater than Return date</span>
  </center>
<?php
  /*
  echo "<script type = \"text/javascript\">
  alert(\" Pick up date Must not bo Greater than Return date\");
  window.location = (\"book_car.php\")
  </script>";

  */
}else{
// retreive the radio button


        $qry = " INSERT INTO booking (Identity,userEmail,phone,Car_id,PickUpDate,ReturnDate,status,Total_price,registrered_date,self_drive	)
        VALUES('$image1','$email','$phone','$_GET[id]','$pickup_date','$return_date','requesting','$total_price','$registerdate','yes')";

      $result = $conn->query($qry);
        if($result == TRUE){
/*
          $qery=" UPDATE cars SET status = 'Unavailable' WHERE car_id='$_GET[id]'";
                    $resul = $conn->query($qery);
                    if($resul == TRUE){
                      */
          echo "<script type = \"text/javascript\">
                alert(\" You're registerd Pay ? \");
                window.location = (\"pay.php\")
                </script>";
              } 
            
            }

} 
             else{
          echo "<script type = \"text/javascript\">
                alert(\"Registration Failed. Try Again\");
                window.location = (\"book_car.php\")
                </script>";
        }


//end of self drive
}
else{
//$selfDrive="no";
// start of with driver 



	$target_path = "cars/";
		$target_path = $target_path . basename ($_FILES['image']['name']);
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
		$image = basename($_FILES['image']['name']);
///

//end 
  $sel = "SELECT * FROM cars WHERE car_id ='$_GET[id]' ";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
            $price_per_day = $rws['PricePerDay'];

    $pickup_date=$_POST['pickup_date'];
    $return_date=$_POST['return_date'];
    $registerdate= date("Y/m/d") ;

    $difference = floor(strtotime($return_date) - strtotime($pickup_date))/(60*60*24);
  
    $phone = $_POST['phone'];
  
    $total_price = $price_per_day + ($difference) * $price_per_day;
///..............


$time1=strtotime($pickup_date);
$time2=strtotime($return_date);

if($time1>$time2){


  ?>
  <center>
    <h2><span style="font-size:25px; color: #FF0000">Pick up date Must not bo Greater than Return date</span>
    </center>
  <?php
  
  /*
  echo "<script type = \"text/javascript\">
  alert(\" Pick up date Must not bo Greater than Return date\");
  window.location = (\"book_car.php?id=<?php '$_GET[id]'?>\")
  </script>";
*/
}else{
// retreive the radio button


            $qry = " INSERT INTO booking (Identity,userEmail,phone,Car_id,PickUpDate,ReturnDate,status,Total_price,registrered_date,self_drive)
            VALUES('$image','$email','$phone','$_GET[id]','$pickup_date','$return_date','requesting','$total_price','$registerdate','no')";
  
          $result = $conn->query($qry);
            if($result == TRUE){
/*
              $qery=" UPDATE cars SET status = 'Unavailable' WHERE car_id='$_GET[id]'";
                        $resul = $conn->query($qery);
                        if($resul == TRUE){
                          */
              echo "<script type = \"text/javascript\">
                    alert(\" You're registerd Pay ? \");
                    window.location = (\"pay.php\")
                    </script>";
                  }  } }
                  ////////////////////////////////license
                 else{
              echo "<script type = \"text/javascript\">
                    alert(\"Registration Failed. Try Again\");
                    window.location = (\"book_car.php\")
                    </script>";
            }}
          }    }
        }
          ?>
    </ul>
  </div>
  

</section>
<div>
