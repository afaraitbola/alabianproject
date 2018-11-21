<?php
session_start();
require_once("../db_config.php");
require_once("../functions.php");

// admin login is being hidden http://localhost/alabianproject/admin/admin-loni-login.php //
$adminUsername = $adminPassword = "";


if (isset($_POST['checkIn'])) {
	
	$adminError = array();
	$adminUsername = sanitize($_POST['adminUser']);
	$adminPassword = sanitize($_POST['adminPass']);

// checking if the input filled is not filled
	if (empty($adminUsername)) {
		
		$adminError[] = "Please enter your username";
	}

    if (empty($adminPassword)) {
    	
    	$adminError[] = "Please Enter your password";
    }


    




   if (empty($adminError)) {
   	
   	   $adminlogOn = "SELECT id,username,password FROM admin WHERE username = '$adminUsername' AND  password = '$adminPassword' ";

   	   $queryAdmin = mysqli_query($connect,$adminlogOn);

   	   if (!$queryAdmin) {
   	   	
   	   	   die("could not query queryAdmin" .mysqli_error($connect));
   	   }


   	   $adminCount = mysqli_num_rows($queryAdmin);


   	   if ($adminCount==1) {
   	   	
   	   	    $fetchAdmin = mysqli_fetch_assoc($queryAdmin);
   	   	    $_SESSION["id"] = $fetchAdmin["id"];

   	   	    header("location:admin-index.php");
   	   	    exit();
   	   }else{

   	   	    $adminError[] = "Username and password does not match";
   	   }





   }if (!empty($adminError)) {

   	
   	$adminErrorMessage = "<ul>";

   	foreach ($adminError as $adminErrors) {
   		
   		$adminErrorMessage .= "<li> {$adminErrors} </li>";
   	}

   	$adminErrorMessage .= "</ul>";
   	
    }



}






?>