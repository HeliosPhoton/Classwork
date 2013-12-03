<?php
session_start();
?>
<html>
<head>
<style>
body
{
background-image:url('bg.png');
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
<h1> Book Review Blog </h1>


<?php
// This will be the number of items per page

			
if($_SESSION['status']==100)
{
include("dbconnect.php");
include("managePosts.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);

$limit = 5;

// Get the current page
if (isset($_GET['page']) AND ! empty($_GET['page']))
{
	$page = intval($_GET['page']);
}
else
{
	$page = 1;
}

// Calculate offset
$offset = $limit * ($page - 1);

// Query the database to get the total number of posts
$results = mysql_query("SELECT COUNT(*) AS total FROM bookposts");

// Get the total number of posts
$row = mysql_fetch_assoc($results);
$total = $row['total'];
//echo $total;

// Calculate last page
$last_page = ceil($total / $limit);


if($_SESSION['type'] == 0)
{
echo "<pre>User: ".$_SESSION['username']."		Access Level: Registered User Access</pre>";


}
elseif($_SESSION['type'] == 1)
{

echo "<pre>User: ".$_SESSION['username']."		Access Level: Administrator Access</pre>";


}
elseif($_SESSION['type'] == 2)
{

echo "<pre>User: ".$_SESSION['username']."		Access Level: Super Administrator Access</pre>";


}

$result = mysql_query("SELECT * FROM bookposts ORDER BY date_published DESC LIMIT $offset,$limit");

$posts= new managePosts();
$posts->createTable();



while($row = mysql_fetch_array($result))
{
    $posts->displayRowEdit($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
}

echo ("</table>");
echo ("<br\><br\>");
if($_SESSION['type'] == 2)
{
echo ("<br\>");
echo ("<form action=\"admin.php\">");
echo ("<input type =\"submit\" value =\"Admin Page\"/></form>");
}
}
elseif($_GET['name'] = 'guest')
{
echo "Guest Access";

include("dbconnect.php");
include("manageGuests.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);

$limit = 5;

// Get the current page
if (isset($_GET['page']) AND ! empty($_GET['page']))
{
	$page = intval($_GET['page']);
}
else
{
	$page = 1;
}

// Calculate offset
$offset = $limit * ($page - 1);

// Query the database to get the total number of posts
$results = mysql_query("SELECT COUNT(*) AS total FROM bookposts");

// Get the total number of posts
$row = mysql_fetch_assoc($results);
$total = $row['total'];
//echo $total;

// Calculate last page
$last_page = ceil($total / $limit);

$gresult = mysql_query("SELECT * FROM bookposts ORDER BY date_published DESC LIMIT $offset,$limit");

$guests= new manageGuests();
$guests->createQTable();



while($row = mysql_fetch_array($gresult))
{
    $guests->displayRowEdit($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
}

}

echo "</table>";

?>
<br>
<div class="pagination">
        <?php if ($offset > 1): ?>
                <a href="blogphase1.php?page=1">First</a>
                |
                <a href="blogphase1.php?page=<?php echo $page-1 ?>">Previous</a>
                |
        <?php endif; ?>
        Page <?php echo $page; ?> of <?php echo $last_page; ?>
        <?php if ($page < $last_page): ?>
                |
                <a href="blogphase1.php?page=<?php echo $page+1 ?>">Next</a>
                |
                <a href="blogphase1.php?page=<?php echo $last_page ?>">Last</a>
        <?php endif; ?>
</div>

<br>
<?php
if($_SESSION['status']==100)
{
	if($_SESSION['type']==0 || $_SESSION['type']==1)
	{
		echo ("<form action=\"insertPosts.php\">");
		echo ("<input type=\"submit\" value=\"Submit a Book Review\"/></form>");
		echo ("<form action=\"logout.php\">");
		echo ("<input type =\"submit\" value =\"Logout\"/></form>");
	}
}
else
{
	echo ("<br><br>");
	echo ("<form action=\"blogphase2.html\">");
	echo ("<input type=\"submit\" value=\"Return to Login Page\"/></form>");
}


?>
</center>
</body>
</html>