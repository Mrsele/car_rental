<?php

$id=$_REQUEST['id'];

include '../includes/config.php';

$qr = " UPDATE useraccount SET Statues = 'Active' WHERE Acc_id ='$id'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"User Account Activated !\");
											window.location = (\"Delete_user_account.php\")
											</script>";
									}
                                
								else 
								echo "<script type = \"text/javascript\">
											alert(\"Error\");
											window.location = (\"deactvate_account.php\")
											</script>";