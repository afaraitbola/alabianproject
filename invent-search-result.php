<?php
session_start();
require_once('db_config.php');
require_once('functions.php');
  require_once('user-header.php');
  require_once('sidebar-user.php');

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

   <!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  

  <!-- BOOTSTRAP CSS file linking -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>



   <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
 <form method="GET" action="invent-search-result.php" style="float:right; margin-top:10px;">
	
	<input type="text" name="search-invent"><input type="submit" name="submit-search">

</form>


          <?php
require_once('process-search-user-invent.php');

?>

       











<!-- MY OWN javascript/jquery file linking -->
<script src="javascript/jquery.js" ></script>
<script src="javascript/script.js"></script>



<!-- MY BOOTSTRAP javascript/jquery file linking -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>