<?php
require_once("db_config.php");
require_once("functions.php");
require_once("process-userchangepassword.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    <?php 
     $title = "Change Password";
?>
    </title>
     <!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="style.css">

  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  

  <!-- BOOTSTRAP CSS file linking -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>

  <body id="userChangePassword">
    <div class="container-fluid">
    
      <?php require_once("user-header.php");?>

      <div class="row">
        <div class="col-md-offset-3 col-md-6" id="admin-main-content">
          <h3 style="text-align:center;">Change Password</h3>

<?php
    if (isset($_GET["status"]) && $_GET["status"] == "correct") {
      
      echo "<div class='alert alert-success'>Password Successfuly Changed</div>";
      
    }elseif (isset($errorMessages)) {
      
      echo "<div class='alert alert-danger'>{$errorMessages}</div>";
    }
?>
      

          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" class="form">
            <div class="form-group">
              <label>New Password </label>
              <input type="password" class="form-control" name="newPassword" placeholder="New Password" >
            </div>

            <div class="form-group">
              <label>Re-New Password </label>
              <input type="password" class="form-control" name="reNewPassword" placeholder="Re-New Password">
            </div>
            <button type="submit" name="changePassword" class="btn btn-success btn-block">Change Password</button>
          </form>
        </div>
      </div>

    </div>

    <!-- MY OWN javascript/jquery file linking -->
<script src="javascript/jquery.js" ></script>
<script src="javascript/script.js"></script>



<!-- MY BOOTSTRAP javascript/jquery file linking -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  </body>
</html>