 <html>
<body>
<center>
<h1> Posts </h1>
<table align="center" border="1">
    <tr>
		<td>Post ID</td> <td>Author</td> <td>Post Title</td> <td> Book Title</td> <td> Post</td> <td>Date Published</td>
    </tr>
<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();

$result = mysql_query("SELECT * FROM posts");


while($row = mysql_fetch_array($result))
{
	echo '<tr><td>' 
			 . $row['post_id'] . '</td>'
             . '<td>' . $row['author'] . '</td>'
             . '<td>' . $row['post_title'] . '</td>'
             . '<td>' . $row['book_title'] . '</td>'
			 . '<td>' . $row['post'] . '</td>'
			 . '<td>' . $row['date_published'] . '</td>'
             . '</tr>';
}
?>
</table>
</center><br><br>
<center><form action=insertPosts.php>
<input type = "submit" value = "Submit a Book Review"/></form></center>
</body>
</html>
