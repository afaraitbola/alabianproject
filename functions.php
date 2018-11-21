

<?php

function sanitize($data){

	$data = trim($data);
	$data = strip_tags($data);
	return $data;
}


	function loggedIn(){
		if(isset($_SESSION["id"])){
		  return $_SESSION["id"]; 
		}else{
			return false;
		}
	}

	function notLoggedIn(){
		if(loggedIn() == false){

       header("location:login.php");
		}
	}
	




?>