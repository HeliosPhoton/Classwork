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
		 VALUES ('".$_SESSION['username']."', '".$_POST['post_title']."', '".$_POST['book_title']."','".$_POST['post']."')";
        echo "$sSql <br>";
	mysql_query($sSql);
        $update=mysql_affected_rows();
	echo "<h2>$update Record Inserted</h2><br />";
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >


	Post Title: <input type="text" name="post_title" /><br />
	Book Title: <input type="text" name="book_title" /><br />
	Post: <input type="text" name="post" /><br />

	
	<input type="submit" name="submitReview" value="Submit Review" />

</form>
<form action="blogphase1.php">
<input type ="submit" value ="Back"/></form>
</body>
</html>
