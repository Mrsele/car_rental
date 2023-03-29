<!DOCTYPE html>
<html lang="en">
<head>
    <<?php
  include 'manager_head.php'

?>


</head>
<body>
  <center>
    <div class="move">
<form action=""method="POST" id="notice">

<textarea rows="10" cols="60" name="comment"placeholder="Enter the Notice "></textarea><br><br>

<input type="submit" name="gopost"value="Post Notice" class="buttons">


</form>
</center>
<?php
if(isset($_POST['gopost'])){
  //<textarea name="notice" width="300"height="300"> 

    $content=$_POST['comment'];
    $date= date("Y-m-d");
  include '../includes/config.php';
  $qry = "INSERT INTO notice (post_date,content,status)
  VALUES('$date','$content','Unread')";
  $result = $conn->query($qry);
  if($result == TRUE){
    echo "<script type = \"text/javascript\">
          alert(\"Notice is Sent !\");
          window.location = (\"post_notice.php\")
          </script>";
  } else{
    echo "<script type = \"text/javascript\">
          alert(\"Registration Failed. Try Again\");
          window.location = (\"post_notice.php\")
          </script>";
  }
}
?>
    </div>    


</body>
</html>

<style>



  .move{
margin-top:20%;
margin-left:10%;

  }

  .buttons {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
 }


</style>