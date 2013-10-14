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
         ( first_name, last_name, email, username, password, type)
         VALUES ('$POST[firstName]', '$_POST[lastName]', '$_POST[email]', '$_POST[username]', PASSWORD(\"$_POST[pass]\"), $type)";

    mysql_query($sSql);

    echo '<h2>USER REGISTERED</h2><br />';
}
?>