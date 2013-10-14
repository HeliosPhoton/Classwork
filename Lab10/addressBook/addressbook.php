<html>
<body>
<center>
<h1> Address Book </h1>
<?php
include("dbconnect.php");
include("manageAddress.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);
$result = mysql_query("SELECT * FROM addressbook");

$address= new manageAddress();
$address->createTable();

while($row = mysql_fetch_array($result))
{
    $address->displayRowEdit($row[0], $row[1], $row[2], $row[3],$row[4],$row[5],$row[6],$row[7]);
}
?>
</table>
</center><br><br>
<form action=insert.php>
<input type = "submit" value = "Add Record"/></form>
</body>
</html>
