<html>
<head>
    <meta charset="UTF-8">
    <title>Fasilo car rental</title>
	<?php include 'menu1.php';?>
</head>
<style>

.unputform{

	margin-top:10%;
	position: absolute;
	margin-left:25%;
}

</style>
<body>
    
<form class="unputform" method="post" enctype="multipart/form-data">

<?php
//$egele=$_REQUEST[id];
                include '../includes/config.php';
                $sel = "SELECT * FROM cars WHERE car_id ='$_GET[idd]'";
                $rs = $conn->query($sel);
						/*while(*/$rws = $rs->fetch_assoc()//){					
		?>
<center>
Car Name:<input type="text" name="carname"value="<?php echo $rws['CarName'];?>"><br>
Car Brand :<input type="text" name="carbrand"value="<?php echo $rws['CarBrand'];?>"><br>
Plate no:<input type="text" name="plate"value="<?php echo $rws['PlateNumber'];?>"><br>
CarColor:<input type="text" name="CarColor"value="<?php echo $rws['CarColor'];?>"><br>
PricePerDay:<input type="number" name="price_per_day"value="<?php echo $rws['PricePerDay'];?>"><br>
FuelType:<input type="text" name="FuelType"value="<?php echo $rws['FuelType'];?>"><br>
ModelOfYear:<input type="date" name="model_of_year"defaultValue="<?php echo $rws['ModelOfYear'];?>"><br>
SeatCapacity:<input type="number" name="seatcapacity"value="<?php echo $rws['SeatCapacity'];?>"><br>
status: <input type="text" name="plate"value="<?php echo $rws['status'];?>"><br>


image: <input type="file"name="image">

<img  src="../cars/<?php echo $rws['Image'];?>" width="100" height="100"><br>
<input type="submit" name="change" value="Update a Car">
						</center>
<?php
                      //  }
?>


</form>



<?php
if(isset($_POST['change'])){
include '../config/connection.php';
$target_path = "../cars/";
$target_path = $target_path . basename ($_FILES['image']['name']);
if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

$image = basename($_FILES['image']['name']);

$carname=$_POST['carname'];
$carbrand=$_POST['carbrand'];
$plateno=$_POST['plate'];
$carcolor=$_POST['CarColor'];
$priceperday=$_POST['price_per_day'];
$fueltype=$_POST['FuelType'];
$modelofyear=$_POST['model_of_year'];
$seatcapacity=$_POST['seatcapacity'];
$satus=$_POST['plate'];

$query="UPDATE cars SET CarName='$carname',CarBrand='$carbrand',PlateNumber='$plateno',CarColor='$carcolor', PricePerDay='$priceperday',FuelType='$fueltype',ModelOfYear='$modelofyear',SeatCapacity=
'$seatcapacity',Image='$image',status='$satus'WHERE car_id='$_GET[idd]'"  ;
$res = $conn->query($query);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Car information Updated !\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}}
                                
								else
								echo "<script type = \"text/javascript\">
											alert(\"Error\");
											window.location = (\"update_cars.php\")
											</script>";
}

?>

</body>
</html>

<style>
body{

background-color:#92a8d1;


}
input[type=text], input[type=password],input[type=date],input[type=number] {
  width: 70%;
  padding: 5px;
  margin: 2px 0 10px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  ra

}



</style>