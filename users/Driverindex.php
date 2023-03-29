<html>
<head>


</head>
Drivers Page

<?php include 'driver_head.php';

include 'includes/config.php'
?>

<body>
    
<div class="welcome">
<center>

 <h1>Well Come : <?php 
session_start();

$dr=$_SESSION['uname'];
echo $dr;

?> </h1>
</center>
</div>
</body>

</html>
<style>
.welcome{
position: fixed;
top:40%;
left:40%;

}
body{

    background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4, 9, 30, 0.7)),url("../img/54.jfif");
    background-position:center;
background-size: cover;

}


</style>