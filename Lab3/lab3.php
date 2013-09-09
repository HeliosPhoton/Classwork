
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Lab 3 CPI 310</title>
</head>


<body>

<?php
$WorldVar = "World";
$SunVar = "Sun";
$MoonVar = "Moon";
define("WORLD_INFO", 92897000);
define("SUN_INFO", 72000000);
define("MOON_INFO", 3456);

echo "<p>Hello ", $WorldVar, "!<br />";
echo "The $WorldVar is ", WORLD_INFO, 
" miles from the $SunVar.<br />";
echo "Hello ", $SunVar, "!<br />";
echo "The $SunVar's core temperature is approximately ",
SUN_INFO, " degrees Fahrenheit.<br />";
echo "Hello ", $MoonVar, "!<br />";
echo "The $MoonVar is ", MOON_INFO, " miles in diameter.</p>";
?>

</body>
</html>