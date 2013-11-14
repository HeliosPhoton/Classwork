<?php
$dom = new DOMDocument();
$dom->Load('orders.xml');
if ($dom->validate()) {
    echo "This document is valid!\n";
	$theData = simplexml_load_file("orders.xml");
	echo "<pre>";
	print_r($theData);
	echo "</pre>";
}
?>
