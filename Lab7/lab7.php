<!DOCTYPE php>
<html>

<head>
</head>

<body>
<?php

$email = $_POST['email'];

$emailContacts = array("barrackobama@gmail.com"=> 'Barrack Obama',"l33tprogrammer@gmail.com" => 'Bill Gates', "hi@msn.com" => 'Hello World', "teacher@asu.edu" => 'Doctor Xavier');


if (array_key_exists($email, $emailContacts))
{
print("<center width=40%>");
print("<h1> Lab 7</h1>");
print("<table border = 2 width=40%>");
print("<tr>");
print("<td align=center> Email </td>");
print("<td align=center> Name </td>");
print("</tr>");
print("<td> $email </td>");
print("<td>".$emailContacts[$email]."</td></table>");
}else
{ 
 print("<center>" .$email. " does not exist </center>");
}

?>




</body>
</html>