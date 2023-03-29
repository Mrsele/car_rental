<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

include 'includes/config.php';

$sel = "SELECT * FROM booking WHERE book_id ='$_GET[id]' ";
$rs = $conn->query($sel);
$rws = $rs->fetch_assoc();
$returndate = $rws['ReturnDate'];
$pickdate=$rws['PickUpDate'];
$totalcost=$rws['Total_price'];
$currentdate= date("Y/m/d") ;
    $difference = floor(strtotime($currentdate) - strtotime($returndate))/(60*60*24);

//echo $difference;
if($difference > 0){


    $totalcost=($difference*1000);

    $query = "UPDATE booking SET Total_price='$totalcost' WHERE book_id ='$_GET[id]'";
	$result = $conn->query($query);
	if($result == TRUE){


        echo "<script type = \"text/javascript\">
        alert(\"Request to return sent wait for Response\");
        window.location = (\"additionalpay.php?id=<?php echo $difference ?>\")
        </script>";
    }
}
if($difference <= 0){

    $difference = floor(strtotime($currentdate) - strtotime($pickdate))/(60*60*24);

$totalcost= $totalcost=$totalcost + ($difference*1000);

$query = "UPDATE booking SET status = 'Returning',Total_price='$totalcost' WHERE book_id ='$_GET[id]'";
$result = $conn->query($query);
if($result == TRUE){

    echo "<script type = \"text/javascript\">
    alert(\"Request sent !\");
    window.location = (\"status.php\")
    </script>";


}else{


    echo "<script type = \"text/javascript\">
    alert(\"Failed to return\");
    window.location = (\"status.php\")
    </script>";




}


}






    ?>
</body>
</html>
