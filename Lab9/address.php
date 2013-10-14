<!DOCTYPE PHP>
<html>

<head>
</head>

<body>


<table align="center" border="1">
    <tr>
        <td>First Name</td><td>Last Name</td><td>Address</td><td>Email</td>
    </tr>
	
<?php

    include("dbconnect.php");
    $con = new dbconnect();
    $con->connect();
    $result = mysql_query("SELECT * FROM AddressBook");

    while($row = mysql_fetch_array($result)) {
        echo '<tr><td>' 
			 . $row['firstName'] . '</td>'
             . '<td>' . $row['lastName'] . '</td>'
             . '<td>' . $row['Address'] . '</td>'
             . '<td>' . $row['Email'] . '</td>'
             . '</tr>';
    }
?>
</table>


</body>

</html>