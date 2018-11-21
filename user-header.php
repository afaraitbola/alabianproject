<?php
require_once("db_config.php");
require_once("functions.php");
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
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body>


<div class="row">
  <div class="col-sm-3 bg bg-info" id="top-sidebar">
    <a href="index.php"><img src="images/logo.jpg" class="img-responsive"></a>
  </div>
  <div class="col-sm-9 bg bg-success" id="top-content">
    <div class="status pull-right">
      <a href="user-index.php"><img src="images/lady.jpg" class="img-circle" style="width:70px; height:70px; "></a>
      <div id="userStatus">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="userStatus">
           <?php
           $id = loggedIn();

           $userStatusSql = "SELECT lname FROM user_registration WHERE id = $id";

          $resultUserStatusSql = mysqli_query($connect, $userStatusSql);


          if(!$resultUserStatusSql) {
            
            die("Could not run sql query" .mysqli_error($connect));
          }

          $getLastName = mysqli_fetch_assoc($resultUserStatusSql);

          echo $getLastName['lname'];

           ?>
             <span class="caret"></span>
        </a>
        <ul class="dropdown-menu pull-right">
         <li><a href="user-logout.php">Log Out</a></li>
         <li><a href="user-changepassword.php">Change Password</a></li>
         <li><a href="user-editprofile.php">Edit Profile</a></li>
        </ul>
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


