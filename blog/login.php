<?php
session_start();
include("dbconnect.php");
$con= new dbconnect();
$con->connect();

//create and issue the query
$sql = "SELECT type FROM users WHERE username = '".$_POST["username"]."' AND password = '".$_POST["password"]."'";
$username = $_POST["username"];
$result = mysql_query($sql);

//get the number of rows in the result set; should be 1 if a match
if (mysql_num_rows($result) == 1) 
	{
		$type=0;
        //if authorized, get the values of f_name l_name
        while ($info = mysql_fetch_array($result)) 
		{
        $type =$info['type'];
		
        }
        echo "<br>";
        if($type == 1)
        {
         $_SESSION['type']=$type; // type of user (admin or regular)
         $_SESSION['status']=100; // indicate that the login is successful
		 $_SESSION['username']= $username;
         echo "Login success, you will be directed to the  Book Blog in 3 seconds";
         header("refresh: 3; url= blogphase1.php");
		 echo ("<form action=\"blogphase1.php\">");
		 echo ("<input type=\"submit\" value=\"Redirect Now\"/></form>");
        }
        elseif($type == 0)
        {
          $_SESSION['type']=$type;
          $_SESSION['status']=100;
		  $_SESSION['username']= $username;
          echo "Login success, you will be directed to the  Book Blog in 3 seconds";
          header("refresh:3 ; url= blogphase1.php");
		  echo ("<form action=\"blogphase1.php\">");
		  echo ("<input type=\"submit\" value=\"Redirect Now\"/></form>");
        }
		elseif($type == 2)
        {
          $_SESSION['type']=$type;
          $_SESSION['status']=100;
		  $_SESSION['username']= $username;
          echo "Login success, you will be directed to the  Book Blog in 3 seconds";
          header("refresh:3 ; url= blogphase1.php");
		  echo ("<form action=\"blogphase1.php\">");
		  echo ("<input type=\"submit\" value=\"Redirect Now\"/></form>");
        }
      
    } 
else 
	{
        //redirect back to login form if not authorized
         echo "Incorrect login, you will be redirected to the front page in 3 seconds.";
         header("refresh:3; url=blogphase2.html");
		 echo ("<form action=\"blogphase2.html\">");
		 echo ("<input type=\"submit\" value=\"Redirect Now\"/></form>");

	}
?>