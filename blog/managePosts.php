<?php
session_start();
?>
<?php
class managePosts
{
function createTable()
{
    echo "<table border=1>";
    echo "<tr>";
    echo "<th> Post ID </th>";
    echo "<th> Author</th>";
    echo "<th> Post Title</th>";
    echo "<th> Book Title</th>";
    echo "<th> Post</th>";
    echo "<th> Date Published</th>";
	echo "<th> Delete </th>";
    echo "<th> Update </th>";
    echo "</tr>";
}

function displayRowEdit($postId, $author, $postTitle, $bookTitle, $post, $datePublished)
{

   echo "<tr>";
   echo "<td> $postId </td>";
   echo "<td> $author </td>";
   echo "<td> $postTitle  </td>";
   echo "<td><a href=\"bookPost.php?id=$postId\" >  $bookTitle  </a></td>";
   
   echo "<td> $post </td>";
   echo "<td> $datePublished </td>";
  
  if($_SESSION['type']==1 || $_SESSION['type']==0 && $_SESSION['username']==$author)
  {
   echo "<td> <form action=\"delete.php?id=$postId\" method=\"post\">";
   echo "<input type=\"hidden\" name=\"DELETE\" value=$postId>";
   echo "<input type=\"submit\" name=\"delete\" value=\"DELETE\"></form></td>";
   
   
   echo "<td> <form action=\"update.php?id=$postId\" method=\"post\">";
   echo "<input type=\"submit\" name=\"update\" value=\"UPDATE\"></form></td>";
   }
   
   echo "</tr>";
   
}
}
?>