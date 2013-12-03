<?php
session_start();
?>
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


echo ("<form action=\"blogphase1.php\">");
echo ("<input type=\"submit\" value=\"Blog Page\"/></form>");
echo ("<form action=\"blogphase2.html\">");
echo ("<input type=\"submit\" value=\"Return to Login Page\"/></form>");
?>
