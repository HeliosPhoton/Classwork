
<?php
$dom = new DOMDocument();
$dom->Load('book2.xml');
if ($dom->validate()) {
    echo "This document is valid!\n";
   $theData = simplexml_load_file("book2.xml");
   echo "<pre>";
   print_r($theData);
   echo "</pre>";
}
?>
