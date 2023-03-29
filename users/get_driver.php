<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Fasilo Car Rental</title>
</head>
<a href="add_driver.php">Back</a>
<body>
<?php
        include '../includes/config.php';

$qy = "SELECT * FROM driver WHERE Driver_id='$_GET[id]' ";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						
						echo "<script type = \"text/javascript\">
									alert(\"The Driver Already exist\");
									window.location = (\"add_driver.php\")
									</script>";
					}
                    else{
?>
<center>
                <h2> Add  Driver </h2>
    <form class="" method="post" enctype="multipart/form-data">
Daily Price :<input type="salary" name="payment" onkeypress="isInputNumber(event)"><br>

<script>
      
      function isInputNumber(evt){
          
          var ch = String.fromCharCode(evt.which);
          
          if(!(/[0-9]/.test(ch))){
              evt.preventDefault();
          }
          
      }
      
  </script>
Phone number<input type="text" name="phone" onkeypress="isInputNumber(event)" ><br>
photo/Image <input type="file" name="image1"><br>
    <input type="submit" value="Add Driver"name="ok">
    </form>
                    </center>
<?php
        if(isset($_POST['ok'])){
        include '../includes/config.php';

        $target_path = "../img/";
        $target_path = $target_path . basename ($_FILES['image1']['name']);
        if(move_uploaded_file($_FILES['image1']['tmp_name'], $target_path)){
        
        $image1 = basename($_FILES['image1']['name']);
        


$payment=$_POST['payment'];
$phone=$_POST['phone'];

        $select = " SELECT * FROM useraccount  WHERE Acc_id='$_GET[id]'" ;

        $result = $conn->query($select);

        $row = $result->fetch_assoc();

        $uname=$row['Username'] ;
        $email=$row['email'];
        $did=$row['Acc_id'];
        $query = "INSERT INTO driver (Driver_id,Name,photo,phone,daily_payment,status)VALUES('$did','$uname','$image1','$phone','$payment','free')";
        $result1 = $conn->query($query);
        if($result1 == TRUE){

            
$elsa="UPDATE driver SET daily_payment='$payment'";
$moges=$conn->query($elsa);
if($moges == TRUE){

            echo "<script type = \"text/javascript\">
            alert(\"Driver Added He is  Ready \");
            window.location = (\"add_driver.php ?>\")
            </script>";
        }}



        }

        } 
    }
        ?>




</body>
</html>



<style>
/* Full-width input fields */
input[type=text], input[type=salary],input[type=file] {
  width: 40%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=number]:focus, input[type=salary]:focus {
  background-color: #ddd;
  outline: none;
}

a {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
form{

    border: 1px solid blue;
width:50%;
margin-top: 5px;
}


</style>