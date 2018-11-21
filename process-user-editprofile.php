<?php
require_once("db_config.php");
require_once("functions.php");


if (isset($_POST['updateprof'])) {
	
	$errorProfile = array();
	$lName = sanitize($_POST['lName']);
	$fName = sanitize($_POST['fName']);
	$Address = sanitize($_POST['Add']);
	$userCity = sanitize($_POST['city']);
	$userState = sanitize($_POST['state']);
	$userCountry = sanitize($_POST['country']);
	$userEmail = sanitize($_POST['emailadd']);
	$userUser = sanitize($_POST['userName']);

	if (empty($lName)) {
		
		$errorProfile[] = "Your Last name is required";

	}

	if (empty($fName)) {
		
		$errorProfile[] = "Your First name is required";
	}


	if (empty($Address)) {
		
		$errorProfile[] = "Your address is important";
	}

	if (empty($userCity)) {
		
		$errorProfile[] = "Please Enter your city";
	}


	if (empty($userState)) {
		
		$errorProfile[] = "Please Enter your state";
	}


	if (empty($userCountry)) {
		
		$errorProfile[] = "Please enter your country";
	}

if (empty($userEmail)) {
		
		$errorProfile[] = "Please enter your Email Address";
	}


	if (empty($userUser)) {
		
		$errorProfile[] = "Username is needed pls";
	}

	
	if (!empty($errorProfile)) {
		
		$errorProfMessage = "<ul>";

		foreach ($errorProfile as $profileErrors) {

			$errorProfMessage .= "<li> $profileErrors </li>";
		}

		$errorProfMessage .= "</ul>";
	}



if (empty($errorProfile)) {
	
	$id = loggedIn();

	$profileChg = "UPDATE user_registration SET lname='$lName', fname='$fName', address = '$Address', city = '$userCity', state = '$userState', country = '$userCountry', email = '$userEmail' ,user = '$userUser' WHERE id = $id ";

	$queryProfChg = mysqli_query($connect,$profileChg);

	if (!$queryProfChg) {
		
		die("could not query queryProfChg" .mysqli_error($connect));
	}

	header("location:user-editprofile.php?status=updated");
	exit();
}

}

?>