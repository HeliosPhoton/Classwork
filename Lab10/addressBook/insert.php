<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
if(isset($_POST['submit'])) {
	$sSql = "INSERT INTO addressbook
		 (firstName, lastName, email,streetNumber, streetName, city, state, zipcode)
		 VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['email']."', '".$_POST['stnumber']."','".$_POST['stname']."', '".$_POST['city']."', '".$_POST['state']."' , '".$_POST['zipcode']."')";
        echo "$sSql <br>";
	mysql_query($sSql);
        $update=mysql_affected_rows();
	echo "<h2>$update Record Inserted</h2><br />";
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

	First Name:<input type="text" name="firstName" /><br />
	Last Name:<input type="text" name="lastName" /><br />
	Street Number:<input type="text" name="stnumber" /><br />
	Streent Name:<input type="text" name="stname" /><br />
	City:<input type="text" name="city" /><br />
	State:<input type="text" name="state" /><br />
	Zip Code:<input type="text" name="zipcode" /><br />
	Email:<input type="text" name="email" /><br />

	<input type="submit" name="submit" value="Add Record" />

</form>
<a href="addressbook.php">Home</a>
