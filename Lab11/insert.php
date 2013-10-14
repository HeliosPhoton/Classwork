<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
if(isset($_POST['submit'])) {
	$sSql = "INSERT INTO `scliu`.`posts`
		 (`post_id` ,
`author` ,
`post_title` ,
`book_title` ,
`post` ,
`date_published`)
		 VALUES (NULL,'".$_POST['author']."', '".$_POST['post_title']."', '".$_POST['book_title']."','".$_POST['post']."',NOW())";
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

	
	<input type="submit" name="submit" value="Add Record" />

</form>
<a href="lab11.php">Home</a>
