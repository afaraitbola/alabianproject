<?php

	require_once("db_config.php");
	require_once("functions.php");

	if (isset($_POST['passForgot'])) {
		
		$errorForgot = array();
		$email_address = sanitize($_POST['emailPass']);
        
//if the email input is empty - shout the error
        if (empty($email_address)) {
        	
        	$errorForgot = "Please kindly enter your Email Address";
        }

     if (!empty($errorForgot)) {
     	
     	
     		
     	$errorForgotMessage = $errorForgot;
     

     	
     }
  //if the email input is not empty -perform the action by send the password to the email address supplied //

        if (!empty($email_address)) {
        	
        	$sqlForgot = "SELECT email,pass FROM user_registration WHERE email = '$email_address' ";

        	$queryForgot = mysqli_query($connect, $sqlForgot);

  //if it does not select the pass from the email address supplied, then error message should be displayed //

        	if (!$queryForgot) {
        		
        	die("could not query queryForgot" .mysqli_error($connect));
        	header("location:forget-pass.php");
        	exit();

        	}

        	//GET THE PASS AND STORE IT IN A VARIABLE

        	$getPassword = mysqli_fetch_assoc($queryForgot);

        	$thePassword = $getPassword['pass'];
        	$theEmailAddress = $getPassword['email'];

   // CHECKING IF EMAIL ADDRESS IN THE DATABASE IS THE SAME AS THE SUPPLIED ONE, THEN SEND THE PASSWORD TO THE EMAIL ADDRESS SUPPLIED//

        	if ($email_address == $theEmailAddress) {
        		
        		//to send the password to the email supplied

        		$to = $email_address;
        		$subject = "PASSWORD";
        		$txt = "Your password is :" . $thePassword ;
        		$header = "FROM : admin@correct.com";
        		mail($to, $subject, $txt, $header);

        		header("location:forget-pass.php?status=successfully");
        		exit();
        	}

        	else{

                 header("location:forget-pass.php?status=wrongone");
        		exit();
        	}



        }

	}

?>