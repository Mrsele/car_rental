<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilo Car Rentals</title>
    <?php   include 'menu1.php';  ?>

</head>
<div>
    <div class="viewnotice">
    <?php

include '../includes/config.php';

$sel = "SELECT * FROM notice WHERE status='Unread' ORDER BY notice_id DESC LIMIT 1 ";
$rs = $conn->query($sel);
$rws = $rs->fetch_assoc();


?>
<h2><i><u>Date:</u></i>
<?php
echo $rws['post_date'];?>
</h2><br>
<h2><i><u>The Notice:</u></i><br>
<?php echo $rws['content'];


?>
</h2>
<!--
<a href="mark_as_read.php?id=<?php /* echo $rws['notice_id']*/ ?>">Mark as read</a>
-->

</div>
</div>
</head>

<body>
    
</body>
</html>
<style>

.viewnotice{

text-align:center;
top:30%;
left:30%;
position:fixed;
width:40%;
height:30%;
color:white;
font-family:Times New Roman;
line-height: 200%;

}
h2{

color:purple;


}

</style>