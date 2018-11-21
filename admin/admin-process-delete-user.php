<?php

require_once("../db_config.php");


   if (isset($_POST['theDelete'])) {
   	
   	//store user id in a variable

   	$idOfUser = $_POST['adminDelUser']; 

//SELECT THE ID OF THE ONE YOU WANT TO DELETE AFTER CLICK
   	$getIdUser = "SELECT id FROM user_registration WHERE id = $idOfUser";



     $queryGetId = mysqli_query($connect, $getIdUser);


     // fetch the id to be certain is getting the main id

     $fetchUserId = mysqli_fetch_assoc($queryGetId);
    


     //store the id in a variable

     $theUserId = $fetchUserId['id'];


     // send a sql query to delete the user 

     $sqlDelUser = "DELETE FROM user_registration WHERE id = $theUserId";

     

     $queryDelUser = mysqli_query($connect, $sqlDelUser);

 



   }
?>