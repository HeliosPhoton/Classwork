<?php
session_start();
?>
<html>
<body>
<center>
<h1> Address Book </h1>
<?php
if($_SESSION['status']==100)
{
include("dbconnect.php");
include("manageAddress.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);
echo $_SESSION['type'];
$result = mysql_query("SELECT * FROM addressbook");

$address= new manageAddress();
$address->createTable();

while($row = mysql_fetch_array($result))
{
    $address->displayRowEdit($row[0], $row[1], $row[2], $row[3],$row[4],$row[5],$row[6],$row[7]);
}

echo "</table>";
echo "</center><br><br>";
echo "<form action=insert.php>";
echo "<input type = \"submit\" value = \"Add Record\"/></form>";


echo "<form action=logout.php>";
echo "<input type = \"submit\" value = \"Logout\"/></form>";
echo "</body>";
echo "</html>";
}else
{
   echo "You have logged out";
   echo "<br> Please re-login. You will be directed to the login page in 5 seconds";
   header("refresh:5 ; url=userloginses.html");
}
?>
