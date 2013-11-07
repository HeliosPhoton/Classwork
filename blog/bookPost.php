<html>
<body>
<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
$postId = $_POST['postId'];
$sSql = "SELECT * FROM bookposts WHERE post_id=\"". $postId . "\"";
$result = mysql_query($sSql);
$row = mysql_fetch_array($result)

echo "<h1> $row[2]</h1><br>"; // Post Title
echo "Author: $row[1]<br>"; // Author
echo "Date Published: $row[5]<br>";
echo "<p> $row[4]</textarea> </p>";


$result = mysql_query("SELECT * FROM bookcomments WHERE post_id=\"". $postId . "\"");

$comments = new manageComments();

while($row = mysql_fetch_array($result))
{
    echo "<h3>$author</h3> ($datePublished)<br>";
    echo $comment;
}

?>
<h3>Leave a comment</h3>
<form method="POST" action="addComment.php">
    <input type="submit" name="addComment">
</form>
<a href="blogphase1.php">Back</a>
</body>
</html>