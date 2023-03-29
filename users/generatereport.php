<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    





<div class="bo">

					
							<?php
							// "SELECT * FROM jokes WHERE date>(date-(60*60*24*30)) ORDER BY score DESC"....... WHERE  PickUpDate > DATE_SUB(NOW(), INTERVAL 1 WEEK) )
// Number of customer this week///
								include '../includes/config.php';
								$select = "SELECT * FROM booking WHERE  PickUpDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
								$log = $conn->query($select);
				             	$num = $log->num_rows;
				              	$row = $log->fetch_assoc();
						
						//	echo $num;

							//// Registered customer  of this week


							$select1 = "SELECT * FROM customers WHERE  reistered_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
							$log1 = $conn->query($select1);
							 $num1 = $log1->num_rows;
							  $row = $log1->fetch_assoc();
					
					//	echo $num1;


                    //  echo "break";

							////end of reg cust
						
						//
					//	 sum=0;
						$query1="SELECT SUM(Total_price) from booking where registrered_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
						$q1=$conn->query($query1);
						//$num2 = $q1->num_rows;
                        $row1=$q1->fetch_array();
					$total=$row1[0];
					//	echo $total;



						// cars for dream ----------

$query2="SELECT * FROM CARS WHERE status='Available'";
$log2 = $conn->query($query2);
							 $num2 = $log2->num_rows;
							  $row2 = $log2->fetch_assoc();
					
						//echo $num2;
						//


						//Canceled books ....................


						$select3 = "SELECT * FROM booking WHERE status = 'Canceled' and PickUpDate > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
						$log3 = $conn->query($select3);
						 $num3= $log3->num_rows;
						  $row3 = $log3->fetch_assoc();
				
				//	echo $num3;

// end of canceled books 

// normal query
$currentdate= date("Y/m/d") ;



$queryn = "INSERT into report (Total_birr,no_of_books,no_of_available_car,no_of_registrered_customer,canceled_books,date) VALUES('$total','$num','$num2','$num1','$num3','$currentdate')";
$resultn = $conn->query($queryn);
if($resultn == TRUE){
  echo "<script type = \"text/javascript\">
		alert(\"Report sent !\");
		window.location = (\"officerindex.php\")
		</script>";
} else{
  echo "<script type = \"text/javascript\">
		alert(\"Rport Not sent\");
		window.location = (\"officerindex.php\")
		</script>";
}



?>
							</div>
						</div>


					</div>


				</div>

</body>
</html>