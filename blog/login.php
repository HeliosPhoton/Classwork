<?php
session_start();
include("dbconnect.php");
$con= new dbconnect();
$con->connect();

//create and issue the query
$sql = "SELECT type FROM users WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."'";

$result = mysql_query($sql);

//get the number of rows in the result set; should be 1 if a match
if (mysql_num_rows($result) == 1) {
   $type=0;
	//if authorized, get the values of f_name l_name
      while ($info = mysql_fetch_array($result)) {
	$type =$info['type'];
	}
      echo $type;
       if($type == 1)
        {
         $_SESSION['type']=$type; // type of user (admin or regular)
         $_SESSION['status']=100; // indicate that the login is successful
         echo "Login success, you will be directed to the Book Blog in 3 seconds";
         header("refresh: 3; url= blogphase1.php");
        }
        elseif($type == 0)
        {
          $_SESSION['type']=$type;
          $_SESSION['status']=100;
          echo "Login success, you will be directed to the Book Blog in 3 seconds";
          header("refresh:3 ; url= blogphase1.php");
        }
      
      }  else {
	//redirect back to login form if not authorized
	  echo "Incorrect login";
	  echo "<br>";
	  echo "Login unsuccessful, you will be redirected to the log in page in 3 seconds";
         header("refresh:3; url=blogphase2.html");
		 

}
?>


