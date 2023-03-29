<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM feedback WHERE fed_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">

					window.location = (\"manager_view_feedback.php\")
				</script>";
	}
?>
