<html>


<html lang="en">
<head>
	<title>Organizations home page </title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/style.css">
<?php
  include 'manager_head.php'

?>

</head>


<style>
body{
   background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4, 9, 30, 0.7)),url("../img/b7.jfif");
    background-position:center;
background-size: cover;
position: relative;  


}



.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left:20%;
  margin-top:10%;
  position: absolute;
  width:90%;


}

 td,  th {
  padding: 7px;
}

 tr{
  
  background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
}


body a{
text-decoration:none;
}

</style>
<body>
<br>

<div class="">

<div class="table">
<table width="60%" border="1" cellspacing="2" cellpadding="0">
    <tr>
    <th>Sender's Email</th>

    <th>Content</th>
    <th>Date of Sent</th>
    <th>Actions </th>

</tr>
<?php 
include '../includes/config.php';
///*************************try to Accept the first Row */
$select = "SELECT * from feedback ORDER BY fed_id  DESC ";
        $result = $conn->query($select);
        while($row = $result->fetch_assoc()){
      ?>
<tr>       
<td> <?php echo $row['Email'] ?></td>
   <td> <?php echo $row['Message'] ?></td>
        <td><?php echo $row['DateOfSend'] ?></td>
        <td> <a href="feedback_delete.php?id=<?php echo $row['fed_id']?>"> Mark as Read</a></td>

 <?php
        }
?>
</tr>
</table>
      </div>
</body>

</html>