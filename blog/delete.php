<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
if(isset($_POST['DELETE'])) {
        $postID = $_POST['DELETE'];
	$sSql = "DELETE FROM bookposts WHERE post_id=\"$postID\"";
      echo $sSql;
	  
	  
	$oResult = mysql_query($sSql);
        $rows=mysql_affected_rows();
	echo "<h2>$rows Record(s) Deleted </h2>";
	
}
?>
<a href="blogphase1.php">Home</a>
