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
<center>
<?php
session_unset(); 

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.

if(session_destroy())
echo "Logged Out Successfully!";
echo "<br> You will be directed to the login page in 3 seconds";
header("refresh:3 ; url=blogphase2.html");
echo ("<form action=\"blogphase2.html\">");
echo ("<input type=\"submit\" value=\"Redirect Now\"/></form>");

?>

</center>
</body>
</html>
