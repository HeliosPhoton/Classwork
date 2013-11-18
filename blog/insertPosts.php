
<?php
include("dbconnect.php"); 
$con= new dbconnect();
$con->connect();
if(isset($_POST['submitReview'])) {
	$sSql = "INSERT INTO bookposts
		 (`author` ,
		`post_title` ,
		`book_title` ,
		`post` 
		)
		 VALUES ('".$_POST['author']."', '".$_POST['post_title']."', '".$_POST['book_title']."','".$_POST['post']."')";
        echo "$sSql <br>";
	mysql_query($sSql);
        $update=mysql_affected_rows();
	echo "<h2>$update Record Inserted</h2><br />";
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >


	Author: <input type="text" name="author" /><br />
	Post Title: <input type="text" name="post_title" /><br />
	Book Title: <input type="text" name="book_title" /><br />
	Post: <input type="text" name="post" /><br />

	
	<input type="submit" name="submitReview" value="Submit Review" />

</form>
<a href="blogphase1.php">Home</a>
