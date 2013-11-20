<?php
session_start();
?>
<html>
<body>
<center>
<h1> Book Review Blog </h1>

<?php
if($_SESSION['status']==100)
{
include("dbconnect.php");
include("managePosts.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);
echo $_SESSION['type'];
$result = mysql_query("SELECT * FROM bookposts ORDER BY date_published DESC");

$posts= new managePosts();
$posts->createTable();

$counter = 0;
while($row = mysql_fetch_array($result))
{
    $posts->displayRowEdit($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $counter);
    $counter++;
}

echo ("</table>");
echo ("<br\><br\>");
echo ("<form action=\"insertPosts.php\">");
echo ("<input type=\"submit\" value=\"Submit a Book Review\"/></form>");
echo ("<form action=\"logout.php\">");
echo ("<input type =\"submit\" value =\"Logout\"/></form>");

}else
{
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

echo ("</table>");
echo ("<br><br>");
echo ("<form action=\"blogphase2.html\">");
echo ("<input type=\"submit\" value=\"Return to Login Page\"/></form>");


}


?>
</table>

</center>
</body>
</html>