<DOCTYPE html>
    <html>
<head>

<html lang="en">
<head>
	<title>Organizations home page </title>
	<meta charset="utf-8">
	<link rel="stylesheet"href="css/style.css">

<style>
.login{



    
}


</style>
</head>
<body>

<form method="post"> 
    <br> <h1>  Log in As</h1>
      <select name="lists" class="listbox">
    <option value="0">System Admin</option>
    <option value="1">Manager</option>
    <option value="2">Lease_Officer</option>
    <option value="3">Driver</option>
    </select><Br><Br>
    <label for="uname">
    <input type="text" name="uname" placeholder="username"><Br><Br>
    </label>
    <label for="psw">
    <input type="password" name="pass" placeholder="pass"><br><br>
    </label>
<button type="submit" name="login"> Login</button>
</form>
</div>




















<?php

if(isset($_POST['login'])){
    include '../includes/config.php';
    $list=$_POST['lists'];

    $uname = $_POST['uname'];
    $pass =md5( $_POST['pass']);
    

if($list=="0"){

	

        $qy = "SELECT * FROM useraccount WHERE Username = '$uname' AND password = '$pass' AND Role='system_adm'";
        $log = $conn->query($qy);
        $num = $log->num_rows;
        $row = $log->fetch_assoc();
        if($num > 0){
            session_start();
            $_SESSION['uname'] = $row['Username'];
            $_SESSION['pass'] = $row['Password'];
            echo "<script type = \"text/javascript\">
                        alert(\"Login Successful\");
                        window.location = (\"systemadminindex.php\")
                        </script>";
        } else{
          
            echo "<script type = \"text/javascript\">
                        alert(\"Incorrect username or password \");
                        window.location = (\"userindex.php\")
                        </script>";
                        
                    //    echo $pass;
        }
    }

if($list=="1"){



        $qy = "SELECT * FROM useraccount WHERE Username = '$uname' AND password = '$pass' AND Role='Manager' AND Statues='Active'";
        $log = $conn->query($qy);
        $num = $log->num_rows;
        $row = $log->fetch_assoc();
        if($num > 0){
            session_start();
            $_SESSION['uname'] = $row['Username'];
            $_SESSION['pass'] = $row['Password'];
            echo "<script type = \"text/javascript\">
                        alert(\"Login Successful\");
                        window.location = (\"managerindex.php\")
                        </script>";
        } else{
            echo "<script type = \"text/javascript\">
                        alert(\"Login Failed. Try Again\");
                        window.location = (\"userindex.php\")
                        </script>";
        }
    }

    if($list=="2"){



        $qy = "SELECT * FROM useraccount WHERE Username = '$uname' AND password = '$pass' AND Role='Lease_Offi' AND Statues='Active'";
        $log = $conn->query($qy);
        $num = $log->num_rows;
        $row = $log->fetch_assoc();
        if($num > 0){
            session_start();
            $_SESSION['uname'] = $row['Username'];
            $_SESSION['pass'] = $row['Password'];
            echo "<script type = \"text/javascript\">
                        alert(\"Login Successful\");
                        window.location = (\"officerindex.php\")
                        </script>";
        } else{
            echo "<script type = \"text/javascript\">
                        alert(\"Login Failed. Try Again\");
                        window.location = (\"userindex.php\")
                        </script>";
        }
    }

    if($list=="3"){



        $qy = "SELECT * FROM useraccount WHERE Username = '$uname' AND password = '$pass' AND Role='Driver'AND Statues='Active'";
        $log = $conn->query($qy);
        $num = $log->num_rows;
        $row = $log->fetch_assoc();
        if($num > 0){
            session_start();
            $_SESSION['uname'] = $row['Username'];
            $_SESSION['pass'] = $row['Password'];
            echo "<script type = \"text/javascript\">
                        alert(\"Login Successful\");
                        window.location = (\"Driverindex.php\")
                        </script>";
        } else{
            echo "<script type = \"text/javascript\">
                        alert(\"Login Failed. Try Again\");
                        window.location = (\"userindex.php\")
                        </script>";
        }
    }




}


				
			?>
    <div>
</body>
    </html>

    <style>


body{
background-image:url("../img/133.jpg");
background-repeat:none;
background-size: cover;

}


form {
  /*border: 1px solid #f1f1f1;*/
  width:48%;
  height:53%;
  margin-left:24%;
  background-color:;
  background-color:#8d99ae;

margin-top:15%;
color:white;
opacity: 0.8;
}

/* Full-width inputs */
.listbox, input[type=text], input[type=password],input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  position: relative;
  margin-left:24%;
  font-size:16px;


}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  margin-left:24%;

}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 20%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  
}

/* The "Forgot password" text */
span.psw {
  
  padding-top: 16px;
  margin-left:24%;

}

/*
.listbox{
width:50%;
height:50px;
}
*/

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}

    </style>