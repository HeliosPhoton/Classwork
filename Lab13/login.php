<?php
session_start();
include("dbonnect.php");
$con = new dbconnect(); 
$on -> connect()

$sql = "SELECT type FROM users WHERE username = '".$_POST["username"]."' AND password = PASSWORD('".$_POST["password"]."')";

$result = mysql_query($sql);

if(mysql_num_rows($results) == 1)
{
 $type=0;
	while($info = mysql_fetch_array($result))
	{
	$type = $info['type'];
	}
	echo $type;
	
		if($type == 1)
		{
		$_SESSION['type'] = $type;
		$_SESSION['status'] = 100;
		echo " login  successful! ";
    $_SESSION['user']=$userName;
    echo session_save_path();
    echo "you will be dircted to the main page.... in 5 seconds";
    header("refresh: 5; logged.php");
		}else
		echo "invalid password";
 
}else
{

   echo "invalid user name";

}
?>

