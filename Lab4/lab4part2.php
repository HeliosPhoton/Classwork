
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Lab 3 CPI 310</title>
</head>


<body>
<script>
<?php

$aFruits = array("John"=>95.69, "Nancy"=>90.6, "Wilbert"=>65.0, "Stacy"=>83.5, "Ravi"=>15);


/* the table stuff */

echo("<center>");
echo<"<h1> Fruit Calorie Table </h1>");


echo("<table border = 2>");
echo("<tr>");
echo("<td> Fruit Name </td>");
echo("<td> Calories </td>");
echo("</tr>");

foreach($aFruits as $fName => $calories)
{
	echo("<tr><td> $fName</td>");
	echo("<td>$calories</td></tr>");


}


echo("</table>")
echo<"</center>");
?>

</script>
</body>
</html>
