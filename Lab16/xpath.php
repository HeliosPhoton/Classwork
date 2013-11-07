<html>
<head> <title>Last Name</title> </head>
<body> 
<?php 
$address= simplexml_load_file("address.xml"); 
foreach ($address->xpath("//LNAME") as $LNAME) 
{ echo "<h2>".$LNAME."</h2>"; }
?> 
</body> 
</html>

