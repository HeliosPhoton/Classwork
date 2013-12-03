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
<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();

if(isset($_POST['updateBlog'])) 
{
    $postId = $_POST['postId'];
    $postTitle = $_POST['postTitle'];
    $bookTitle = $_POST['bookTitle'];
    $post = $_POST['post'];
    $sSql = "UPDATE bookposts SET post_title = \"$postTitle\", book_title = \"$bookTitle\", post = \"$post\" WHERE post_id = \"$postId\"";
    echo "$sSql <br>";
    mysql_query($sSql);
    $update=mysql_affected_rows();
    echo "<h2>$update Record Inserted</h2><br />";
}

if(isset($_POST['update'])) 
{

    $sSql = "SELECT * FROM bookposts WHERE post_id=".$_GET['id']."";

    $oResult = mysql_query($sSql);
    $aRow = mysql_fetch_assoc($oResult);
}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'].'?id='.$_GET['id']; ?>" >
    
    <input type="text" name="postId" value="<?php echo $_GET['id']; ?>" hidden><br>
    Post Title<input type="text" name="postTitle" value="<?php echo $aRow['post_title']; ?>"><br>
    Book Title<input type="text" name="bookTitle" value="<?php echo $aRow['book_title']; ?>"><br>
    Post<br>
    <textarea name="post" rows="4" cols="50"><?php echo $aRow['post']; ?></textarea> 
	<br>
    <input type="submit" name="updateBlog" value="Update">

</form>
<a href="blogphase1.php">Home</a>
</body>
</html>