
<?php
class manageAddress
{

function createTable()
{
    echo "<table border=1>";
    echo "<tr>";
      echo "<th> Photo </th>";
      echo "<th> Frist Name</th>";
      echo "<th> Last Name</th>";
      echo "<th> Email</th>";
      echo "<th> Street Number</th>";
      echo "<th> Street Name</th>";
      echo "<th> City</th>";
      echo "<th> State</th>";
      echo "<th> Zip Code</th>";
      echo "<th> Map It </th>";
      echo "<th> DELETE </th>";
    echo "</tr>";

}

function displayRowEdit($fname, $lname, $ema, $stn, $stname, $city, $state, $zipcode)
{
    $location = $stn." ".$stname." ". $city." ".  $state." ".$zipcode;


   echo "<tr>";
   echo "<td> <img border=\"0\" src=\"./img/janaka.jpg\" alt=\"Janaka\" width=\"50\" height=\"50\"> </td>";
   echo "<td> $fname </td>";
   echo "<td> $lname </td>";
   echo "<td> $ema  </td>";
   echo "<td> $stn </td>";
   echo "<td> $stname </td>";
   echo "<td> $city </td>";
   echo "<td> $state  </td>";
   echo "<td> $zipcode  </td>";
   echo "<td> <a href=\"http://maps.google.com/maps?q=$location\">View on Google Maps</a> </td>";
   echo "<td> <form action=\"delete.php?id=$ema\" method=\"post\">";
   echo "<input type=\"submit\" value=\"DELETE\" > </form></th>";
   echo "</tr>";

}

function displayRow($fname, $lname,$add, $ema)
{

   echo "<tr>";
   echo "<th> $fname </th>";
   echo "<th> $lname </th>";
   echo "<th> $add </th>";
   echo "<th> $ema  </th>";
   echo "</tr>";

}
}
?>
