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

function displayRowEdit($post_id, $author, $post_title, $book_title, $post, $date_published)
{

   echo "<tr>";
   echo "<td> $post_id </td>";
   echo "<td> $author </td>";
   echo "<td> $post_title </td>";
   echo "<td> $book_title </td>";
   echo "<td> $post </td>";
   echo "<td> $date_published </td>";

   
   echo "<td> <form action=delete.php method=post>";
   echo "<input type=\"hidden\" name=\"DELETE\" value=$post_id>";
   echo "<input type=\"submit\" name=\"delete\" value=\"DELETE\"></form></td>";
   
   
   echo "<td> <form action=\"update.php?id=$post_id\" method=\"post\">";
   echo "<input type=\"hidden\" name=\"UPDATE\" value=$post_id>";
   echo "<input type=\"submit\" name=\"update\" value=\"UPDATE\"></form></th>";
  
   echo "</tr>";
   
}



}

?>