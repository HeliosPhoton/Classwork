<html>
<body>
<center>
<h1> Book Review Blog </h1>
<table>
<?php
include("dbconnect.php");
include("manageGuests.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);
$result = mysql_query("SELECT * FROM bookposts ORDER BY date_published DESC");

$posts= new manageGuests();
$posts->createQTable();

$counter = 0;
while($row = mysql_fetch_array($result))
{
    $posts->displayQRowEdit($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $counter);
    $counter++;
}
?>
</table>
<br><br>
<form action="blogphase2.html">
<input type="submit" value="Return to Login Page"/></form>
</center>
</body>
</html>