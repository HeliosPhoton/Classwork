<html>
<body>
<center>
<h1> Post <h1>
</center>

<?php
if ($_SESSION['status'] == 100)
{
include("dbconnect.php");
include("manageGuests.php");
include("manageComments.php");
$con= new dbconnect();
$con->connect();
$postId = $_GET['id'];

$post_result = "SELECT * FROM bookposts WHERE post_id = "$postId"";
$comment_result = "SELECT * FROM bookcomments WHERE post_id = "$postId"";

$post= new manageGuests();
$post->createQTable();

while($row = mysql_fetch_array($post_result))
		{
			$post->displayQRowEdit($row[0], $row[1], $row[2], $row[3],$row[4]);

		}


$comments = new manageComments();
$comment->createCommentTable();

while($row = mysql_fetch_array($comment_result))
{
	$comment->displayRow($row[2], $row[3], $row[4]);
}


}else
{
   echo "You have logged out";
   echo "<br> Please re-login. You will be directed to the login page in 3 seconds";
   header("refresh:3 ; url=userloginses.html");
}
?>


<h3>Leave a comment</h3>
<form method="POST" action="addComment.php?id=$postId\">
    <input type="submit" name="addComment">
</form>
<a href="blogphase1.php">Back</a>

<form action="logout.php">";
<input type = \"submit\" value = \"Logout\"/></form>;

</body>
</html>