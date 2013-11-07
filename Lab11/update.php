<?php
include("dbconnect.php");
$con = new dbconnect();
$con->connect();


if(isset($_POST['submit'])) {
		 $postID = $_POST['post_id'];
         $author = $_POST['author'];
         $postTitle = $_POST['post_title'];
         $bookTitle   = $_POST['book_title'];
         $post = $_POST['post'];

         $sSql="UPDATE posts SET author =\"$author\" , post_title =\"$postTitle\" , book_title=\"$bookTitle\", post= \"$post\" WHERE post_id =\"$postID\"";

         echo $sSql;

        mysql_query($sSql);
		$update = mysql_affected_rows();
		echo "<h2>$update Record(s) Updated </h2>";
		
}

if(isset($_GET['post_id'])) {
		$postID = $_GET['post_id'];
        $sSql = "SELECT * FROM posts WHERE post_id=\"$postID\"";
	
        $oResult = mysql_query($sSql);

        $aRow = mysql_fetch_assoc($oResult);
}


?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['post_id']; ?>" >

		<input type="hidden" name="post_id" value="<?php echo $aRow['post_id']; ?>" readonly><br>
		Author: <input type="text" name="author" value="<?php echo $aRow['author']; ?>" /><br />
		Post Title: <input type="text" name="post_title" value="<?php echo $aRow['post_title']; ?>" /><br />
		Book Title: <input type="text" name="book_title" value="<?php echo $aRow['book_title']; ?>"  /><br />
		Post: <input type="text" name="post" value="<?php echo $aRow['post']; ?>" /><br />
		
        <input type="submit" name="submit" value="Update Post" />

</form>
<a href="lab11.php">Home</a>