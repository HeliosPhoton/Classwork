<!DOCTYPE PHP>
<html>
<head>
</head>
<body>

<?php
$address = $_POST['billAddress'];
$email = $_POST['email'];


$tires = $_POST['tires'];
$brake = $_POST['brake'];
$eOil = $_POST['eOil'];
$bOil = $_POST['bOil'];

$tPrice = 99.99;
$brPrice = 49.99;
$ePrice = 9.99;
$bPrice = 19.99;

if ($tires <= 4 && $brakes <= 5 && $eOil <= 10 && $bOil <= 10)
{
print("<h1 align='center'> Bob's Auto Parts</h1>");
print("Tires = $". $tires*$tPrice. "<br><br>");
print("Front Brake = $". $brake*$brPrice . "<br><br>");
print("Engine Oil = $". $eOil*$ePrice . "<br><br>");
print("Brake Oil = $". $bOil*$bPrice . "<br><br>");
print("Your total is: $" . (($tires*$tPrice)+($brake*$brPrice)+($eOil*$ePrice)+($bOil*$bPrice)) . "<br><br>");
print("Your order is being shipped to:" . "<br>");
print($address . "<br>");
print("Email has been sent to ".$email . "<br>");
}
else
{
	print("Please enter a valid input");
	print("You cannot order more than 4 tires");
	print("You cannot order more than 5 front brakes");
	print("You cannot order more than 10 of each of the oils");
	
}






?>

</body>
</html>