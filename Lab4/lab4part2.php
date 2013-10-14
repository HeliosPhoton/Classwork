<?php
// Function to calculate student's final grade
function calculateGrade($studentGrade) {
	if($studentGrade >= 90 && $studentGrade <=100) {
		return 'A';
	}
	else if($studentGrade >= 80 && $studentGrade < 90) {
		return 'B';
	}
	else if($studentGrade >= 70 && $studentGrade < 80) {
		return 'C';
	}
	else if($studentGrade >= 60 && $studentGrade < 70) {
		return 'D';
	}
	else {
		return 'F';
	}
}

$finalAverages = array('John'=>95.60, 'Nancy'=>90.6, 'Wilbert'=>65.0, 'Stacy'=>83.5, 'Ravi'=>15);
print("<center>");
print("<h1> Student Grades </h1>");
print("<table border = 2>");
print("<tr>");
print("<td> Student Name </td>");
print("<td> Final Average </td>");
print("<td> Letter Grade </td>");	
print("</tr>");

foreach($finalAverages as $name => $grade) {
	print("<tr>");
	print("<td> $name </td>");
	print("<td> $grade </td>");
	print("<td> " .calculateGrade($grade). "</td> </tr>");
}

print("</table>");
print("</center>");
?>