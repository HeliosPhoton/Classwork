<?php
include("dbconnect.php");
$con=new dbconnect();
$con->connect();
if(isset($_POST['submit'])) {
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
?>
<form action="blogphase2.html">
<input type="submit" value="Return to Login Page"/></form>
