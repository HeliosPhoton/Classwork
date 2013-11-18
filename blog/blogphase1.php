<html>
<body>
<center>
<h1> Book Review Blog </h1>
<?php
session_start();
if($_SESSION['status']==100)
{
include("dbconnect.php");
include("managePosts.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);
echo $_SESSION['type']
$result = mysql_query("SELECT * FROM bookposts ORDER BY date_published DESC");

$posts= new managePosts();
$posts->createTable();

$counter = 0;
while($row = mysql_fetch_array($result))
{
    $posts->displayRowEdit($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $counter);
    $counter++;
}

}else
{
   echo "You have logged out";
   echo "<br> Please re-login. You will be directed to the login page in 5 seconds";
   header("refresh:5 ; url=login.html");
}

?>
</table>
<br><br>
<form action="insertPosts.php">
<input type="submit" value="Submit a Book Review"/></form>

<form action="logout.php">";
<input type = \"submit\" value = \"Logout\"/></form>;

</center>
</body>
</html>