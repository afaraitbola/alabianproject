<?php

   require_once("db_config.php");
   require_once("functions.php");

   if (isset($_POST['editInvent'])) {
   	
   	  $inventError = array();

   	  
   	  $editGoodName = sanitize($_POST['gName']);

   	  if (isset($_POST['catCat'])) {
   	  	 
   	  	 $editCat = $_POST['catCat'];
   	  }

   	  $editDescribe = sanitize($_POST['tDescribe']);
   	  $editType = sanitize($_POST['gType']);


   	  if (empty($editGoodName)) {
   	  	
   	  	$inventError[] = "Please Enter a Product Name";
   	  }
    

    if (!isset($_POST['catCat'])) {
    	$inventError[]  = "Please Select One";
    }

   if (empty($editDescribe)) {
   	
   	    $inventError[] = "Please Describe the product";
   }

   if (empty($editType)) {
   	
   	    $inventError[] = "Enter one Type Importer, Dealer, Retailer or Repairer";
   }


   if (!empty($inventError)) {
   	
   	   $editErrorMessage = "<ul>";

   	   foreach ($inventError as $inventErrors) {
   	   	
   	   	$editErrorMessage .= "<li>$inventErrors</li>";
   	   }

   	   $editErrorMessage .= "</ul>";
   }

  if (empty($inventError)) {

  	$id = loggedIn();
  	
  	$inventUpdate = "UPDATE post SET goods_name = '$editGoodName' , category_type = '$editCat', goods_description = '$editDescribe'  WHERE userid = $id";


  	$queryInventUpdate = mysqli_query($connect,$inventUpdate);


  		if (!$queryInventUpdate) {
  		
  		die("could not query queryInventUpdate" .mysqli_error($connect));
  	}
header("location:edit-invetory.php?status=edited");
  	exit();



  
  }

  	




   }


?>