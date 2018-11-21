<?php
session_start();
require_once("db_config.php");
require_once("functions.php");
require_once("user-changepassword.php");

if (isset($_POST['changePassword'])) {
  
  $errorNew = array();
  $newPass = md5(sanitize($_POST['newPassword']));
  $confirmPass = md5(sanitize($_POST['reNewPassword']));

if (empty($newPass)) {
  
  $errorNew[] = "New Password is required";

}


if (empty($confirmPass)) {
   $errorNew[] = "Confirm the New Password";

}



if ($newPass !== $confirmPass) {
  
  $errorNew[] = "Password does not match";

}


if (!empty($errorNew)) {
  
  $errorMessages = "<ul>";

  foreach ($errorNew as $theErrorNew) {
    
    $errorMessages .= "<li>$theErrorNew</li>";
  }

   $errorMessages .= "</ul>";

}




  elseif ($newPass == $confirmPass) {

    $id = loggedIn();
    
    $chgPass = "UPDATE user_registration SET pass = '$newPass' WHERE id = $id";

    $queryChgPass = mysqli_query($connect, $chgPass);

    if (!$queryChgPass) {
      
      die("could not query " .mysqli_error($connect));
    }

    header("location:user-changepassword.php?status=correct");
    exit();
  } 




}



?>