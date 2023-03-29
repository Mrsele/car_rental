<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
			include 'menu1.php';
		
include '../includes/config.php';
?>
</head>
<body>
 
<center>
<div class="table">
    <table width="70%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th>Client Email</th>
        <th> Phone </th>
        <th> Car Name</th>
        <th> car Image</th>

        <th width="110" class="ac">Actions</th>

      </tr>
      <?php
        include '../includes/config.php';

        $select = "SELECT booking.book_id,booking.userEmail,booking.phone,cars.CarName,cars.Image
										FROM booking JOIN cars ON booking.Car_id=cars.car_id WHERE booking.status ='Returning' ORDER BY book_id DESC"  ;
        
        $result = $conn->query($select);
        while($row = $result->fetch_assoc()){
      ?>
      <tr>
      <td><h3><?php echo $row['userEmail'] ?></h3></td>
        <td><h3><?php echo $row['phone'] ?></h3></td>
        <td><h3><?php echo $row['CarName'] ?></h3></td>

        
        <td>						<img class="image" src="../cars/<?php echo $row['Image'];?>" width="100" height="80">
</td>

        <td><a href="confirmretunAction.php?id=<?php echo $row['book_id'] ?>" class="ico del">ConFirm</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
    </center>
</body>


<div>





</html>




<style>
body{
    background-color:gray;
font-weight:bold;
}
table{


}
.image{
margin-left:30%;

}

.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left:10%;
  margin-top:10%;
  position: absolute;
  width:90%;


}

 td,  th {
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


   </style>