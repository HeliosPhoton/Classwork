<?php
session_start();
?>
<html>
<head>
<style>
body
{
background-image:url('doge.jpg');
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
<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();

if(isset($_POST['updateType'])) 
{
    $postId = $_POST['postId'];
    $type=10;
	 if($_POST[type] =="admin")
        $type = 1;
     else
        $type =0;;
    $sSql = "UPDATE  users SET  type = $type WHERE id` =\"$postId\" ;";
    echo "$sSql <br>";
    mysql_query($sSql);
    $update=mysql_affected_rows();
    echo "<h2>$update Record Inserted</h2><br />";
}

if(isset($_POST['update'])) 
{

    $sSql = "SELECT * FROM users WHERE id=".$_GET['id']."";

    $oResult = mysql_query($sSql);
    $aRow = mysql_fetch_assoc($oResult);
}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" >
    
    <input type="text" name="postId" value="<?php echo $_GET['id']; ?>" hidden><br>
	Regular User <input type="radio" name="type" value="user" checked="checked"/>
	Admin <input type="radio" name="type" value="user" >
	<br>
    <input type="submit" name="updateType" value="Update">

</form>
<form action="admin.php">
<input type ="submit" value ="Back"/></form>
</center>
</body>
</html>