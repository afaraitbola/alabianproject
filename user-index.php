<?php 
require_once("db_config.php");
require_once("functions.php");
require_once("process-login.php");
require ("head.php");


?>
 
<!DOCTYPE html>
<html>
<head>
  <title>
  <?php
         $title = "User Page";

         ?>

  </title>


     <!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  

  <!-- BOOTSTRAP CSS file linking -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>




  <body id="admin">
    <div class="container-fluid">
      <?php require_once("user-header.php") ?>
      <div class="row">
        <?php require_once("sidebar-user.php") ?>
        <div class="col-sm-9" id="admin-main-content">
          <div class="row">
            <div class="col-sm-4">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-users"></i> 
                <h4> Subscribers</h4>
               </a>
             </div>
            </div> 
            <div class="col-sm-4">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-male"></i> 
                 <h4> Male</h4>
                 <span class="little-text">Subscribers</span>
               </a>
             </div>
            </div> 
            <div class="col-sm-4">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-female"></i> 
                <h4>Female</h4>
                <span class="little-text">Subscribers</span>
               </a>
             </div>
            </div>
           
          </div>
        </div>
      </div>

    </div>
    
    <!-- MY OWN javascript/jquery file linking -->
<script src="javascript/jquery.js" ></script>
<script src="javascript/script.js"></script>



<!-- MY BOOTSTRAP javascript/jquery file linking -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
  </body>
</html>


</body>
</html>