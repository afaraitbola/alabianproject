<?php
session_start();
require_once("db_config.php");
require_once("functions.php");

if (isset($_POST['login'])) {


  $errors= array();
  $users = sanitize($_POST['user']);
  $passes = sanitize($_POST['pass']);

  if (empty($users)) {
    
   $errors[] = "Username is Required";
  }

  if (empty($passes)) {
    
    $errors[] = "Password is Required";
  }

  if (empty($errors)) {
    
      $userSql = "SELECT id,user,pass FROM user_registration WHERE user= '$users' AND pass = '$passes' ";


         $resultUserSql = mysqli_query($connect,$userSql);
             


         if (!$resultUserSql) {
           
           die("Could not select from the database" .mysqli_error($connect));
         }
           


         //mysqli_num_rows is counting the table in the database
         $count = mysqli_num_rows($resultUserSql);

         //if result matched $users and $passes,table row must be 1

         if ($count==1) {
             //redirect to the user index page
                $getField = mysqli_fetch_assoc($resultUserSql);
                $_SESSION["id"] = $getField["id"];
               
             header("location:user-index.php");
             exit();

         }else{

          $errors[]="username and password do not match";
         }
 
     
  }$errorMessages = "<ul>";

      foreach ($errors as $theErrors) {
        
        $errorMessages .= "<li> {$theErrors} </li>";
      }
              $errorMessages .= "</ul>";
  
}

?>