<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
if(isset($_GET['id'])) {
        $eml= $_GET['id'];
	$sSql = "DELETE FROM addressbook WHERE email=\"$eml\"";
      echo $sSql;
	$oResult = mysql_query($sSql);
        $rows=mysql_affected_rows();
	echo "<h2>$rows Record(s) Deleted </h2>";
}
?>
<a href="addressbook.php">Home</a>
