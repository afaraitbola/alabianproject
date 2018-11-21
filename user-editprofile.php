<?php
session_start();
require_once("db_config.php");
require_once("functions.php");
require_once("process-user-editprofile.php");
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

  <style type="text/css">
    .form-group input[type=text]{
          width: 250px;
          border: 2px solid #dff0d8;
      }

      textarea{
        width: 250px;
        height: 100px;
        border: 2px solid #dff0d8;
      }

  </style>

</head>

  <body id="userUpdateProfile">
    <div class="container-fluid">
    
      <?php require_once("user-header.php");?>

      <div class="row">
        <div class="col-md-offset-3 col-md-6" id="userUpdateProfile">
          <h3 style="text-align:center;">Change Profile</h3>
      <?php
       
       $id = loggedIn();
       $details = "SELECT lname,fname,address,city,state,country,email,user FROM user_registration WHERE id = $id";
       $queryDetails = mysqli_query($connect,$details);
       $getDetails = mysqli_fetch_assoc($queryDetails);

       $userlast = $getDetails['lname'];
       $userfirstName = $getDetails['fname'];
       $useradd = $getDetails['address'];
       $usercity = $getDetails['city'];
       $userstate = $getDetails['state'];
       $usercountry = $getDetails['country'];
       $useremail = $getDetails['email'];
       $usersName = $getDetails['user'];


      ?>

      <?php

         if (isset($_GET['status']) && $_GET['status'] = 'updated') {
           
           echo "<div class='alert alert-success'> Profile Successful Updated </div>";
         }elseif (isset($errorProfMessage)) {
           
           echo "<div class='alert alert-danger'> $errorProfMessage </div>";
         }
      ?>

          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST" class="form" align=center>
            <div class="form-group">
              <label>Lastname:</label>
              <input type="text" name="lName" value="<?php echo "$userlast"; ?>">
            </div>

            <div class="form-group">
             <label>Firstname:</label>
             <input type="text" name="fName" value="<?php echo "$userfirstName"; ?>">
            </div>

            <div class="form-group">
             <label>Address:</label>
             <textarea name="Add"><?php echo "$useradd"; ?></textarea>
            </div>

            <div class="form-group">
             <label>City:</label>
             <input type="text" name="city" value="<?php echo "$usercity"; ?>">
            </div>

            <div class="form-group">
             <label>State:</label>
             <input type="text" name="state" value="<?php echo "$userstate"; ?>">
            </div>



            <div class="form-group">
             <label>Country:</label>
             <input type="text" name="country" value="<?php echo "$usercountry"; ?>">
            </div>

            <div class="form-group">
             <label>Email:</label>
             <input type="text" name="emailadd" value="<?php echo "$useremail"; ?>">
            </div>


            <div class="form-group">
             <label>Username:</label>
             <input type="text" name="userName" value="<?php echo $usersName ?>">

             <div class="form-group">
              <input type="hidden" name="updateDate">
             </div>
            </div>

            <button type="submit" name="updateprof" class="btn btn-success btn-block">Update Profile</button>
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