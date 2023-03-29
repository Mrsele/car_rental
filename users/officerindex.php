
 <html>
<head>

	<title>Admin Home</title>
	<link rel="stylesheet" href="../css/style.css">



	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
			}
		}
	</script>
</head>


<style>
body{
    background-image:linear-gradient(rgba(4,9,30,0.7),rgba(4, 9, 30, 0.7)),url("../img/sa1.jpg");
    background-position:center;
background-size: cover;
position: relative;  
  

}


</style>

<body>



<div id="header">
	<div class="shell">

		<?php
			include 'menu1.php';
		?>			<a href="index.php">Dashboard</a>

		</div>

	
    

<br><br>
<center>

 <h1>Well Come : <?php 
session_start();

$dr=$_SESSION['uname'];
echo $dr;

?> </h1>
</center>
</body>
</html>
<style>


	h1{

margin-top:10%;
collor:white;

	}
	
body{
	background-color: lightblue;
color:white;
}
</style>