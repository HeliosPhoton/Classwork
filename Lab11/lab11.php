<html>
<body>
<center>
<h1> Posts </h1>
<table>
<?php
include("dbconnect.php");
include("managePosts.php");
$con= new dbconnect();
$con->connect();
$result = mysql_query("SELECT * FROM posts");

$posts= new managePosts();
$posts->createTable();


while($row = mysql_fetch_array($result))
{
    $posts->displayRowEdit($row[0], $row[1], $row[2], $row[3],$row[4],$row[5]);
}
?>
</table>
</center><br><br>
<center>
<form action=insert.php>
<input type = "submit" value = "Submit a Book Review"/></form></center>
</body>
</html>
