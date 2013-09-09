<?php

function calculateBMI($weight, $height = 60) {
	return $weight / ($height*$height)*703;
}

print("<center width=40%>");
print("<h1> BMI Table</h1>");
print("<table border = 2 width=40%>");
print("<tr>");
print("<td align=center> Weight </td>");
print("<td align=center> BMI (at 5 Feet) </td>");
print("</tr>");

for($i = 120; $i <= 250; $i+= 5) {
	print("<tr>");
	print("<td> $i </td>");
	printf("<td> %.2f" . " </td>", calculateBMI($i));
}

print("</table>");
print("</center>");
?>