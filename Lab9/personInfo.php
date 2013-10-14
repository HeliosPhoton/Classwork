<?php
include("dbconnect.php");
$con = new dbconnect();
$con->connect();
$result = mysql_query("SELECT * FROM PersonInfo");

while($row = mysql_fetch_array($result))
  {
  echo $row['first_Name'] . " " . $row['last_Name']; // as an associative array
  echo "<br>";
  }

mysql_close($con);
?>

