<?php
session_start();
print("<h1> logged in <h1>");
$ses_id = session_id();
echo $ses_id;
echo "session created for $_SESSION[user]";

?>
