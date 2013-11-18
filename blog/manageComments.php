<?php
class manageComments
{

function createCommentTable()
{
    echo "<table border=1>";
    echo "<tr>";
    echo "<th> Comment Author </th>";
    echo "<th> Comment </th>";
    echo "<th> Date Published</th>";
    echo "</tr>";
}

function displayRow($comment_author, $comment, $date)
{
   echo "<tr>";
   echo "<td> $comment_author </td>";
   echo "<td> $comment </td>";
   echo "<td> $date </td>";
   echo "</tr>";
}

}
?>