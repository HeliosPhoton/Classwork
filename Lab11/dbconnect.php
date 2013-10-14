<?php
class dbconnect{
function connect()
{
  $con=mysql_connect("localhost","scliu","scliu"); //phpMySQL user name and pw
    if (!$con)
     {
       die('Could not connect: ' . mysql_error());
     }
   mysql_select_db("scliu", $con); // phpMySQL user name
}
}
?>
