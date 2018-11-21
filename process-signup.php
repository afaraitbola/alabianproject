<?php

require_once("db_config.php");
require_once("functions.php");


$lname = $fname = $add = $city = $state = $country = $emailAddress = $username = $password = $gender = $sellerType = $registeredDate ="";

if (isset($_POST["register"])) {
	
	$error = array();
	$lname = sanitize($_POST['lname']);
	$fname = sanitize($_POST['fname']);
    $add = sanitize($_POST['address']);
    $city = sanitize($_POST['city']);
    $state = sanitize($_POST['state']);
    $country = sanitize($_POST['country']);
    $emailAddress = sanitize($_POST['emailAdd']);
    $username = sanitize($_POST['user']);
    $password = md5(sanitize($_POST['pass']));
    $gender = isset($_POST['gender']);   
     $gender = isset($_POST['gender']);   

    

    if (isset($_POST['seller-type'])) {
    	$sellerType = $_POST['seller-type'];
    }



 if (empty($lname)) {
 	
 	$error[] = "lastname is required";
 }

 if (empty($fname)) {
 	
 	$error[] = "firstname is required";
 }


 if (empty($add)) {
 	
 	$error[] = "Address is required";
 }


 if (empty($city)) {
 	
 	$error[] = "City is required";
 }


 if (empty($state)) {
 	
 	$error[] = "State is required";
 }


 if (empty($country)) {
 	
 	$error[] = "Country is required";
 }

if (empty($emailAddress)) {

	$error[] = "Email Address is required";
}

 if (empty($username)) {
 	
 	$error[] = "Username is required";
 }


 if (empty($password)) {
 	
 	$error[] = "Password is required";
 }




if (!isset($_POST['gender'])) {
	
	$error[] = "Gender is required";
}



if (!isset($_POST['seller-type'])) {
	
	$error[] = "Please select one";
}


if (empty($error)) {

	$sql = "INSERT INTO user_registration(lname,fname,address,city,state,country,email,user,pass,gender,seller_type,registered_date) VALUES('$lname','$fname','$add','$city','$state','$country','$emailAddress','$username','$password','$gender', '$sellerType', NOW())";

	$resultSql = mysqli_query($connect, $sql);

	if (!$resultSql) {
	       	   die("query is not working" .mysqli_error($connect));
	      
	      }

	       header("location:signup.php?status=success");
	       exit();
}else{
          
          $errorMessage = "<ul>";

          foreach ($error as $errors) {
          	$errorMessage .= "<li> $errors </li>";
          }

          $errorMessage .= "</ul>";
}
	 }
?>