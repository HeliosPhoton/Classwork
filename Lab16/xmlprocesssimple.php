<?php
$theData = simplexml_load_File("address.xml");

foreach($theData->ADDRESS as $theADDRESS) {
    $theFName = $theADDRESS->FNAME;
	$theLName = $theADDRESS->LNAME;
    $theStreet = $theADDRESS->STREET;
    $theEmail = $theADDRESS->EMAIL->EMAIL0;
	$theEmail1 = $theADDRESS->EMAIL->EMAIL1;
	$theEmail2 = $theADDRESS->EMAIL->EMAIL2;

	echo "<p>".$theFName." " .$theLName."<br>
	".$theStreet."<br>
	".$theEmail."<br>
	".$theEmail1."<br>
	".$theEmail2."<br>
	</p>";

    unset($theFName);
	unset($theLName);
    unset($theStreet);
    unset($theEmail);
	unset($theEmail1);
	unset($theEmail2);
}
?>

