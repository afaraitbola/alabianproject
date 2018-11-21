<?php

require_once("db_config.php");
require_once("functions.php");


$postdate = $goodname = $cat = $descriptions = $userid = $catId = "";

if (isset($_POST['addInvent'])) {
	
	$errorForm = array();
	$postdate = sanitize($_POST['postDate']);
	$goodname = sanitize($_POST['goodName']);

	if (isset($_POST['categories'])) {
		
		$cat = $_POST['categories'];
	}

     $descriptions = sanitize($_POST['description']);
     $userid = $_POST['userId'];
     $catId = sanitize($_POST['catid']);



    //checking if each field is not field or empty

     if (empty($goodname)) {
     	
     	$errorForm[] = "Enter product name";
     }

     if (!isset($_POST['categories'])) {
     	
     	   $errorForm[] = "Please select one of the categories";

     	     }

     if (empty($descriptions)) {
     	
     	$errorForm[] = "Description of the product is needed";
     }


     if (empty($catId)) {
     	
     	$errorForm[] = "Enter one of it (importer,dealer,retailer or repairer) ";
     }


    if (empty($errorForm)) {
    	
    	$id = loggedIn();

    	$userSql = "SELECT user FROM user_registration WHERE user = $id";
    	//inserting into category table first

     	$catSql = "INSERT INTO category(cat_name) VALUES('$catId')";

     	$catSqlquery = mysqli_query($connect,$catSql);

     	while ($catSqlquery = mysqli_query($connect,$catSql)) {

     		$last_id = mysqli_insert_id($connect);

     		
     		$postSql = "INSERT INTO post(post_date,goods_name,category_type,goods_description,userid,catid) VALUES(NOW(),'$goodname', '$cat','$descriptions','$id','$last_id')";


     		$postSqlquery = mysqli_query($connect,$postSql);


     		header("location:add-inventory.php?status=success");
     		exit();

     		if (!$postSqlquery) {
     			
     			die("could not query postSqlquery" .mysqli_error($connect));
     		}
     	}


}else{

	$errorFormMessage = "<ul>";

	foreach ($errorForm as $errorForms) {
		
		$errorFormMessage ="<li> $errorForms </li>";
	}

	$errorFormMessage = "</ul>";
}

}
?>