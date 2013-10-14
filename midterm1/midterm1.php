<!DOCTYPE PHP>
<html>

<head>
</head>

<body>


<table align="center" border="1">
    <tr>
        <td>Day</td><td>Calories Burned</td><td>Calories Consumed</td><td>Exercise Type</td><td>Exercise Duration</td>
    </tr>
	
<?php

    include("dbconnect.php");
    $con = new dbconnect();
    $con->connect();
    $result = mysql_query("SELECT * FROM healthInfo");

    while($row = mysql_fetch_array($result)) {
        echo '<tr><td>' 
			 . $row['Day'] . '</td>'
             . '<td>' . $row['calories_burned'] . '</td>'
             . '<td>' . $row['calories_consumed'] . '</td>'
             . '<td>' . $row['exercise_type'] . '</td>'
			 . '<td>' . $row['exercise_duration'] . '</td>'
             . '</tr>';
    }
?>
</table>


</body>

</html>