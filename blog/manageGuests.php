<?php
class manageGuests
{
function createQTable()
{
    echo "<table border=1>";
    echo "<tr>";
    echo "<th> Post ID </th>";
    echo "<th> Author</th>";
    echo "<th> Post Title</th>";
    echo "<th> Book Title</th>";
    echo "<th> Post</th>";
    echo "<th> Date Published</th>";
    echo "</tr>";

}

function displayQRowEdit($postId, $author, $postTitle, $bookTitle, $post, $datePublished)
{

   echo "<tr>";
   echo "<td> $postId </td>";
   echo "<td> $author </td>";
   echo "<td> $postTitle  </td>";
   echo "<td><a href=\"bookPost.php?id=$postId\" >  $bookTitle  </a></td>";
   
   echo "<td>  $post </td>";
   echo "<td> $datePublished </td>";
   
   
   echo "</tr>";
   
}

}

?>