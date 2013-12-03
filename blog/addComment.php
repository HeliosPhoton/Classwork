<?php
session_start();
?>
<?php
include("dbconnect.php"); 
$con= new dbconnect();
$con->connect();
if($_SESSION['status']==100)
{
	if(isset($_POST['submitComment'])) 
	{
	$sSql = "INSERT INTO bookcomments
		 (`post_id`,`author` ,`comment` )
		 VALUES ('".$_POST['postid']."','".$_SESSION['username']."', '".$_POST['comment']."')";
        echo "$sSql <br>";
	mysql_query($sSql);
        $update=mysql_affected_rows();
	echo "<h2>$update Comment Added</h2><br />";
	}
	$id = $_POST['postid'];
}
else
{
	if(isset($_POST['submitComment'])) 
	{
	$sSql = "INSERT INTO bookcomments
		 (`post_id`,`author` ,`comment` )
		 VALUES ('".$_POST['postid']."','Guest', '".$_POST['comment']."')";
        echo "$sSql <br>";
	mysql_query($sSql);
        $update=mysql_affected_rows();
	echo "<h2>$update Comment Added</h2><br />";
	}
	$id = $_POST['postid'];
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<input type="hidden" name="postid" value="<?php echo $_GET['id'];?>" />
	Comment: <input type="text" name="comment" /><br />
	<br>
	<input type="submit" name="submitComment" value="Submit Comment" />
	

</form>
<button onclick="window.location.href='bookPost.php?id=<?php echo $id; ?>'">Back</button>
<br>
<form action="blogphase1.php">
<input type ="submit" value ="Blog List"/></form>
