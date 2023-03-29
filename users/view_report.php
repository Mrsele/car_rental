<html>


<html lang="en">
<head>
	<title>Organizations home page </title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/style1.css">
<?php
  include 'manager_head.php'

?>

</head>


<style>
  body{

background-color:grey;
  }
table{
  background-color:white;
   /*
  background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4, 9, 30, 0.7)),url("../img/12.jpg");
    background-position:center;
background-size: cover;
position: relative;  
*/

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

 tr:nth-child(even){
  
  background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
}




</style>
<body>
<br>

<div class="">

<div class="table">
<table width="75%" border="1" cellspacing="2" cellpadding="0">
    <tr>
    <th>Date of Report</th>

    <th>The total Birr Collected</th>
    <th>Number of Booking this week</th>
    <th>Currently Available Cars</th>
    <th>users registered this week</th>
    <th>Canceled users this week</th>
</tr>
<?php 
include '../includes/config.php';
///*************************try to Accept the first Row */
$select = "SELECT * from report ORDER BY report_id  DESC ";
        $result = $conn->query($select);
        while($row = $result->fetch_assoc()){
      ?>
<tr>       
<td> <?php echo $row['date'] ?></td>
   <td> <?php echo $row['Total_birr'] ?></td>
        <td><?php echo $row['no_of_books'] ?></td>
        <td><?php echo $row['no_of_available_car'] ?></td>
        <td><?php echo $row['no_of_registrered_customer'] ?></td>
        <td><?php echo $row['canceled_books'] ?></td>



 <?php
        }
?>
</tr>
</table>
      </div>
</body>

</html>