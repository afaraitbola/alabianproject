<?php

require_once("../db_config.php");
require_once("../functions.php");

if (isset($_POST['signUp'])) {
	

	$theError = array();
	$theLastname = sanitize($_POST['lastname']);
	$theFirstname = sanitize($_POST['firstname']);
	$theAddress = sanitize($_POST['add']);
	$theCityUser = sanitize($_POST['cityUser']);
	$theStateUser = sanitize($_POST['stateUser']);
	$theCountry = sanitize($_POST['country']);
	$theEmail = sanitize($_POST['eAddress']);
	$theUsername = sanitize($_POST['userName']);
	$thePassword = sanitize(md5($_POST['passWord']));

	if (isset($_POST['gender'])) {
		
		$gender = $_POST['gender'];
	}elseif (isset($_POST['gender'])) {
		
		$gender = $_POST['gender'];
	}

  if (isset($_POST['sellerType'])) {
  	
  	$sellType = $_POST['sellerType'];
  }
   


  if (empty($theLastname)) {
  	
  	$theError[] ="Please Enter the Last name";
  }

  if (empty($theFirstname)) {
  	
  	$theError[] ="Please Enter the First name";
  }


if (empty($theAddress)) {
	
	$theError[] = "Please Enter full address";
}


 if (empty($theCityUser)) {
       $theError[] = "City Required";
  }

 if (empty($theStateUser)) {
       $theError[] = "State is needed";
  }

   if(empty($theCountry)) {

   $theError[] = "Country is needed Pls";

  }

   if (empty($theEmail)) {
       $theError[] = "Email  Address is important";
  }

   if (empty($theUsername)) {
       $theError[] = "Username is very important ";
  }


  if (empty($thePassword)) {
  	
  	$theError[] = "Please enter password";
  }

if (strlen($thePassword) < 6) {
	
	$theError[] = "the lenght must be more that 6";
}

if (!isset($_POST['gender'])) {
	
	$theError[] = "Please select one gender";
}

if (!isset($_POST['sellerType'])) {
	
	$theError[] = "please select one type importer,dealer,retaailer or repairer";
}




if (!empty($theError)) {
	
	$theMessageErr = "<ul>";

	foreach ($theError as $myError) {
		
		$theMessageErr .= "<li>$myError</li>";
	}

	$theMessageErr .= "</ul>";
}


if (empty($theError)) {
	
	//insert the details to user_registration table in database

	$sqlUsers = "INSERT INTO user_registration(lname,fname,address,city,state,country,email,pass,gender,seller_type,registered_date) VALUE('$theLastname','$theFirstname','$theAddress','$theCityUser','$theStateUser','$theCountry','$theEmail','$thePassword','$gender','$sellType',NOW())";


	$queryUserss = mysqli_query($connect,$sqlUsers);

	if (!$queryUserss) {
		
		die("could not query sqlUsers" .mysqli_error($connect));
	}

	header("location:admin-add-user.php?status=granted");
	exit();
}


}
?>