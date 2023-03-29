<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<?php  include 'driver_head.php';?>
</head>

<body>
    <div class="container">

    <div class="display">
  

    <?php
    		include '../includes/config.php';
            $username=$_SESSION['uname'];

$sel = "SELECT * FROM driver WHERE Name ='$username'";
        $rs = $conn->query($sel);
        $rws = $rs->fetch_assoc();
        $ide = $rws['assigned_car'];
        $d_id=$rws['Driver_id']; 
if($d_id==0){

?>
<center>
<h3>Car Not Assigned Yet</h3>
</center>
<?php
}else{
$habt="SELECT * FROM cars WHERE car_id='$ide'";
$gr=$conn->query($habt);
$gh=$gr->fetch_assoc();
?>

<?php

$bewket="SELECT * FROM booking WHERE Driver_id='$d_id' ORDER BY book_id  DESC LIMIT 1";
$bk=$conn->query($bewket);
$bm=$bk->fetch_assoc();
$phone=$bm['phone'];
?>
<center>
<div class="moveit">
<h2> Your Assigned Car is:</h2><br>
	<img class="" src="../cars/<?php echo $gh['Image'];?>" width="300" height="200" alt="no Assigned car"><br>
    <h2>Car Name <?php echo $gh['CarName']; ?></h2>
    <h3>Duration :<?php echo $bm['PickUpDate'] ?> To <?php echo $bm['ReturnDate'] ?></h3>
<br><h2>Customer Phone Number:<i> <?php echo $phone;?></i></h2>
<?php }?>

</center>
</div></div>
</div>
</body>
</html>


<style>

.image{

    margin-top:30%;
}


.display{
margin-left:30%;
margin-top:15%;
position: fixed;

}


body{

background-color:gray;
    background-position:center;
background-size: cover;
color:white;
}

.moveit{



}

.moveit img{
border:2px solid blue;


}
</style>