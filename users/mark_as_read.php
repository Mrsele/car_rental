<?php
$id=$_GET[id];


$qery=" UPDATE notice SET status = 'Read' WHERE notice_id='$id'";
$resul = $conn->query($qery);
if($resul == TRUE){
   echo "<script type = \"text/javascript\">
   alert(\" \");
   window.location = (\"view_notice.php\")
   </script>";		 }		 

?>