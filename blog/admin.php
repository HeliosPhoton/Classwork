<?php
session_start();
?>
<html>
<head>
<style>
body
{
background-image:url('doge.jpg');
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
<h1> Users </h1>
<?php
include("dbconnect.php");
include("manageUsers.php");
$con= new dbconnect();
$con->connect();

$result = mysql_query("SELECT * FROM users");

$posts= new manageUsers();
$posts->createTable();

while($row = mysql_fetch_array($result))
{
    $posts->displayRowEdit($row[0], $row[1], $row[2], $row[3],$row[4], $row[5]);
}
?>


<br>
<div class="pagination">
        <?php if ($offset > 1): ?>
                <a href="admin.php?page=1">First</a>
                |
                <a href="admin.php?page=<?php echo $page-1 ?>">Previous</a>
                |
        <?php endif; ?>
        Page <?php echo $page; ?> of <?php echo $last_page; ?>
        <?php if ($page < $last_page): ?>
                |
                <a href="admin.php?page=<?php echo $page+1 ?>">Next</a>
                |
                <a href="admin.php?page=<?php echo $last_page ?>">Last</a>
        <?php endif; ?>
</div>
</table>
<br>
<?php
if($_SESSION['status']==100)
{
	echo ("<br><br>");
	echo ("<form action=\"blogphase1.php\">");
	echo ("<input type=\"submit\" value=\"Back\"/></form>");
	echo ("<br><br>");
	echo ("<form action=\"blogphase2.html\">");
	echo ("<input type=\"submit\" value=\"Return to Login Page\"/></form>");
}


?>
</center>
</body>
</html>