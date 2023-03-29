<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilo Car Rental</title>
</head>

<body>
   
</body>


<?php
			include 'menu1.php';
		?>
<center>
<div class="table">

<table width="70%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th> User Name</th>
        <th> Email Address</th>

        <th width="110" class="ac">Actions</th>

      </tr>
      <?php
        include '../includes/config.php';
        $select = "SELECT * from useraccount WHERE Role='Driver' ORDER BY Acc_id  DESC"  ;
        $result = $conn->query($select);
        while($row = $result->fetch_assoc()){
      ?>
      <tr>
      <td><h3><?php echo $row['Username'] ?></h3></td>
        <td><h3><?php echo $row['email'] ?></h3></td>


        <td><a href="get_driver.php?id=<?php echo $row['Acc_id'] ?>" class="ico del">Add This driver</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
      </center>
  </div>



</html>


<style>






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