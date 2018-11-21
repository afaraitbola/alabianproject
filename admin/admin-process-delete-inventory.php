<?php
session_start();

require_once("../db_config.php");
require_once("../functions.php");

if (isset($_POST['delete'])) {

//create variable for the hidden input to store the id which  is in value='$fetchTheInventory[id] //
	$theId = $_POST['thePostId'];
	

	$getId = "SELECT id FROM post WHERE post.catid = $theId";

	$queryGetId = mysqli_query($connect,$getId);

    $fetchThePostId = mysqli_fetch_assoc($queryGetId);

    $theMainId = $fetchThePostId['id'];
	
	//delete the particular post 

			
			$delThePost = "DELETE FROM post WHERE post.id = $theMainId";

   $querydelPost = mysqli_query($connect,$delThePost);

   if (!$querydelPost) {
   	
   	die("could not query delThePost" .mysqli_error($connect));
   }

      echo "Successfully deleted";
		header("location:admin-process-view-inventory.php");
		exit();
	
}
	
	
?>