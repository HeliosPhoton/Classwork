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

function displayRowEdit($postId, $author, $postTitle, $bookTitle, $post, $datePublished, $rowNum)
{

   echo "<tr>";
   echo "<form method=POST action=bookPost.php>";
   echo "<td> <input name=postId value=$postId hidden> $postId </td>";
   echo "<td> $author </td>";
   echo "<td> <a href=javascript:document.forms[$rowNum].submit()>$postTitle</a> </td>";
   echo "</form>";
   echo "<td> $bookTitle </td>";
   echo "<td>  $post </td>";
   echo "<td> $datePublished </td>";
   
   echo "<td> <form action=delete.php method=post>";
   echo "<input type=\"hidden\" name=\"DELETE\" value=$postId>";
   echo "<input type=\"submit\" name=\"delete\" value=\"DELETE\"></form></td>";
   
   
   echo "<td> <form action=update.php method=\"post\">";
   echo "<input type=\"hidden\" name=\"UPDATE\" value=$postId>";
   echo "<input type=\"submit\" name=\"update\" value=\"UPDATE\"></form></th>";
   
   
   echo "</tr>";
   
}



}

?>