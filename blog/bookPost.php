<?php
session_start();
?>
<html>
<head>
<style>
body
{
background-image:url('bg.png');
	no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>
</head>
<body>
<center>
<h1> Post <?php echo $_GET['id']?> <h1>
<?php
// hyperlink php

include("dbconnect.php");
$con= new dbconnect();
$con->connect();

if(isset($_GET['id'])) {


       $post_id = $_GET['id'];
       $result = mysql_query("SELECT * FROM bookposts WHERE post_id=\"$post_id\"");
       $cresult = mysql_query("SELECT * FROM bookcomments WHERE post_id=\"$post_id\"");
	   
	   


	     echo "<table border=1>";
				echo "<tr>";
				echo "<th> Author</th>";
				echo "<th> Post Title</th>" ;
				echo "<th> Book Title</th>" ;
				echo "<th> Post</th>" ;
				echo "<th> Date Published</th>" ;
				echo "</tr>";
		
		while($row = mysql_fetch_array($result))
		{
				echo "<tr>";
				echo "<td>" .$row['author']. "</td>";
				echo "<td>" .$row['post_title']. "</td>";
				echo "<td>" .$row['book_title']. "</td>";
				echo "<td>" .$row['post']. "</td>";
				echo "<td>" .$row['date_published']. "</td>";
				echo "</tr>";
		}
			   echo("</table>");
               echo("<br>");
               echo("Comments<br>");
               echo("<table border = 1>");
               echo("<tr>");
               echo("<th> Name </th>");
               echo("<th> Comment </th>");
               echo("</tr>");

       while($row = mysql_fetch_array($cresult))
       {
               echo("<tr>");
               echo("<td>".$row['author']."</td>");
               echo("<td>".$row['comment']."</td>");
               echo("</tr>");
       }
}
               echo("</table>");

               echo("<br/>");
               
?>
<br>

</table>
<br><br>
<h3>Leave a comment</h3>
<form method="POST" action="addComment.php?id=<?php echo $post_id; ?>">
<input type="submit" value= "Add Comment" >
</form>

<form action="blogphase1.php">
<input type ="submit" value ="Back"/></form>

<form action="logout.php">
<input type ="submit" value ="Logout"/></form>

</center>
</body>
</html>