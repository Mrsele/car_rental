
 <html>
<head>

	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css">



	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
</head>
<body>

<div id="header">
	<div class="shell">

		<?php
			include 'menu.php';
		?>
		</div>

	</div>
</div>

<div id="container">
	<div class="shell">

		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Client Messages
		</div>

		<br />

		<div id="main">
			<div class="cl">&nbsp;</div>

			<div id="content">

						<h2 class="left">Client Messages</h2>

					</div>

					<div class="table">
						<table width="888" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"></th>
								<th>የመልክቱ ይዘት</th>
								<th>የተላከበት ቀን</th>
								<th>ሁኔታ</th>
								<th width="110" class="ac">መቆጣጠር</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td></td>
								<td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>
								<td><?php echo $row['time'] ?></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</table>

	</div>
</div>

</body>
</html>
