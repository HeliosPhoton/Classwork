<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();


if(isset($_POST['UPDATE'])) {
    $postId = $_POST['postId'];
    $authorName = $_POST['authorName'];
    $postTitle = $_POST['postTitle'];
    $bookTitle = $_POST['bookTitle'];
    $post = $_POST['post'];
    $sSql = "UPDATE bookposts SET author = \"$authorName\", post_title = \"$postTitle\", book_title = \"$bookTitle\", post = \"$post\" WHERE post_id = \"$postId\"";
    echo "$sSql <br>";
    mysql_query($sSql);
    $update=mysql_affected_rows();
    echo "<h2>$update Record Inserted</h2><br />";
}

if(isset($_POST['updateId'])) {
    $id = $_POST['updateId'];
    $sSql = "SELECT * FROM bookposts WHERE post_id='".$id."'";

    $oResult = mysql_query($sSql);
    $aRow = mysql_fetch_assoc($oResult);
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['updateId']; ?>" >
    
    <input type="text" name="postId" value="<?php echo $aRow['post_id']; ?>" hidden><br>
    Author Name<input type="text" name="authorName" value="<?php echo $aRow['author']; ?>"><br>
    Post Title<input type="text" name="postTitle" value="<?php echo $aRow['post_title']; ?>"><br>
    Book Title<input type="text" name="bookTitle" value="<?php echo $aRow['book_title']; ?>"><br>
    Post<br>
    <textarea name="post" rows="4" cols="50"><?php echo $aRow['post']; ?></textarea> 
	<br>
    <input type="submit" name="updateReview" value="Update">

</form>
<a href="blogphase1.php">Home</a>