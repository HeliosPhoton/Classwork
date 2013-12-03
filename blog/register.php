<html>
<head>
<style>
body
{
background-image:url('bg.png');
	no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
</head>
<body>
<center>
<?php
include("dbconnect.php");
$con=new dbconnect();
$con->connect();
if(isset($_POST['submit'])) 
{
     
	   
	$checkusername = mysql_query("SELECT COUNT(*) FROM users WHERE username = '$_POST[username]'");
	echo $checkusername;
	 if($checkusername > 0)  
     {  
        echo "<h1>Error</h1>";  
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>"; 
		echo ("<form action=\"register.html\">");
		echo ("<input type=\"submit\" value=\"Return to Register Page\"/></form>");
     }  
     else  
	 {
	 $type=10;
	 if($_POST[type] =="admin")
        $type = 1;
     else
        $type =0;

	 $sSql = "INSERT INTO users
	 ( first_name, last_name, username, password, type)
	  VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[username]', '$_POST[password]', $type)";

	 mysql_query($sSql);

	 echo '<h2>USER REGISRERED</h2><br />';
	 }
}
?>
<form action="blogphase2.html">
<input type="submit" value="Return to Login Page"/></form>
</center>
</body>
</html>
