<?php
$time = $_POST[time];
$url = $_POST[url];
echo " you will be redirected to $url in $time seconds";
header("refresh: $time; $url");
?>
