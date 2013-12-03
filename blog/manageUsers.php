<?php
session_start();
?>
<?php
class manageUsers
{
function createTable()
{
    echo "<table border=1>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> First Name</th>";
    echo "<th> Last Name</th>";
    echo "<th> Username</th>";
	echo "<th> Password</th>";
    echo "<th> Type</th>";
	echo "<th> Change Permission </th>";
    echo "</tr>";
}

function displayRowEdit($ID, $fname, $lname, $username, $password,$type)
{

   echo "<tr>";
   echo "<td> $ID </td>";
   echo "<td> $fname </td>";
   echo "<td> $lname  </td>";
   echo "<td> $username </td>"; 
	echo "<td> $password </td>";    
   echo "<td> $type </td>";

   
   echo "<td> <form action=\"alter.php?id=$ID\" method=\"post\">";
   echo "<input type=\"submit\" name=\"update\" value=\"UPDATE\"></form></td>";
echo "</tr>";
 }
   
   
   
}

?>