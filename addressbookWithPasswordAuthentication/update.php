<?php
include("dbconnect.php");
$con = new dbconnect();
$con->connect();

$email;
if(isset($_POST['submit'])) {
         $fName = $_POST['firstName'];
         $lName = $_POST['lastName'];
         $eml   = $_POST['email'];
         $stN = $_POST['stnumber'];
         $stName = $_POST['stname'];
         $city = $_POST['city'];
         $state = $_POST['state'];
         $zipcode = $_POST['zipcode'];

         $email =$_POST['oldEmail'];
         $sSql="UPDATE addressbook SET firstName =\"$fName\" , lastName =\"$lName\" , email=\"$eml\", streetNumber= \"$stN\", streetName= \"$stName\", city= \"$city\", state= \"$state\", zipcode=\"$zipcode\" WHERE email =\"$email\"";

         echo $sSql;

        mysql_query($sSql);
}

if(isset($_GET['id'])) {

        $sSql = "SELECT * FROM addressbook WHERE email='".$_GET['id']."'";

        $oResult = mysql_query($sSql);

        $aRow = mysql_fetch_assoc($oResult);
}
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" >
        //<input type="hidden" name="email" value="<?php echo $_GET['id']; ?>" />
        First Name:<input type="text" name="firstName" value="<?php echo $aRow['firstName']; ?>" /><br />
        Last Name:<input type="text" name="lastName" value="<?php echo $aRow['lastName']; ?>" /><br />
        Email:<input type="text" name="email" value="<?php echo $aRow['email']; ?>" /><br />

        Street Number:<input type="text" name="stnumber" value="<?php echo $aRow['streetNumber']; ?>" /><br />
        Street Name:<input type="text" name="stname" value="<?php echo $aRow['streetName']; ?>" /><br />
        City:<input type="text" name="city" value="<?php echo $aRow['city']; ?>" /><br />
        State:<input type="text" name="state" value="<?php echo $aRow['state']; ?>" /><br />
        Zip Code:<input type="text" name="zipcode" value="<?php echo $aRow['zipcode']; ?>" /><br />

        <input type="hidden" name="oldEmail" value="<?php echo $aRow['email']; ?>" /><br/>>
        <input type="submit" name="submit" value="Update Item" />

</form>
<a href="addressbook.php">Home</a>
