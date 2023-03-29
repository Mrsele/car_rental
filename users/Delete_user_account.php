<html lang="en">
<head>



	<title>Organizations home page </title>


	<meta charset="utf-8">
	<link rel="stylesheet"href="css/style1.css">

  <?php include 'adminheader.php'  ?>



</head>

<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure To DeActivate Account ?")){
				window.location.href ='deactivate_account.php?id='+id;
			}
		}
	</script>

<body>




<center>
  <div class="table">
    <table width="80%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <th> User Name</th>
        <th> Email Address</th>
        <th> Role</th>

        <th> Status</th>
        <th> Activate</th>

        <th width="110" class="ac">DeActivate</th>
      </tr>
      <?php
        include '../includes/config.php';
        $select = "SELECT * from useraccount WHERE Role='Manager'||Role='Lease_Offi'||Role='Driver' ORDER BY Acc_id  DESC"  ;
        $result = $conn->query($select);
        while($row = $result->fetch_assoc()){
      ?>
      <tr>
      <td><h3><?php echo $row['Username'] ?></h3></td>
        <td><h3><?php echo $row['email'] ?></h3></td>
        <td><h3><?php echo $row['Role'] ?></h3></td>

        <td><?php echo $row['Statues'] ?></td>
        
        <td><a href="activate_userAccount.php?id=<?php echo $row['Acc_id'] ?>" class="ico del">Activate</a></td>

        <td> <a href="javascript:sureToApprove(<?php echo $row['Acc_id'] ;?>)" class="ico del">Deactivate</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </table>
      </center>

      </div>
    </div>





<?php

   //   }
      ?>



</body>



</html>


<style>
body{
  background-image:url('../img/33.jpg');
}


.mv_table
{



}
.table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-left:10%;
  margin-top:5%;
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
