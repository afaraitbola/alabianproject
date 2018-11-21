<?php
  require_once("../db_config.php");

  if (isset($_POST['theEdit'])) {
  	
  	//get the ID of the user you want to edit

  	$editUserId = $_POST['adminDelUser'];

  	$sqlEditId = "SELECT id FROM user_registration WHERE id = $editUserId";

     $queryEditId = mysqli_query($connect, $sqlEditId);

     $fetchid = mysqli_fetch_assoc($queryEditId);

     $geee = $fetchid['id'];
     
     $goo = "SELECT * FROM user_registration WHERE id = $geee";

     $dddd = mysqli_query($connect,$goo);

     $ffff = mysqli_fetch_assoc($dddd);

     $reer = $ffff['lname'];

   


  }
?>