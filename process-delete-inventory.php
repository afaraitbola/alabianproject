<?php
require_once("db_config.php");
require_once("functions.php");

if (isset($_GET['delete'])) {

   $id = loggedIn();

   $postId = "SELECT id FROM post WHERE post.userid = $id";
   $queryPostId = mysqli_query($connect, $postId);

    $fetchId = mysqli_fetch_assoc($queryPostId);
    $theId = $fetchId['id'];

    

  $delPost = " DELETE FROM post WHERE id = $theId AND post.userid = $id";


  $queryDelPost = mysqli_query($connect, $delPost);
if (!$queryDelPost) {
	
	die("could not query queryDelPost" .mysqli_error($connect));
}

header("location:view-inventory.php");
}
?>