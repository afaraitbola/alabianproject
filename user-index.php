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

  <style type="text/css">
    
    .all-users, .male-users,.female-users {font-size: 20px;}

  </style>
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
                <span class="all-users">
                <?php 
              // GET THE TOTAL NUMBER OF USERS THROUGH ID IN THE TABLE // USER_REGISTRATION AND SET THE COUNTED ID WHICH IS COUNT
              // (id) as UserTotal ,SO THAT YOU CAN SELECT IT WHEN YOU // WANT TO PRINT ON SCREEN


                $noOfUsers = "SELECT COUNT(id) as UserTotal FROM user_registration"; 

                $queryNos = mysqli_query($connect,$noOfUsers);

              // STORE THE NUMBER OF USERS IN A VARIABLE
               $getNoUsers = mysqli_fetch_array($queryNos);

               // CALL OUT THE NO OF USERS YOU HAVE
               

               echo $getNoUsers['UserTotal'] . ' USERS';
                          

                

                ?>
                </span>
               </a>
             </div>
            </div> 
            <div class="col-sm-4">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-male"></i> 
                 <h4> Male</h4>
                 <span class="male-users">
                 <?php
             $noOfMale = "SELECT COUNT(gender) as maleUser FROM user_registration WHERE gender = 'male' ";

             $queryNoOfMale = mysqli_query($connect,$noOfMale);
             
             $getNoMaleUsers = mysqli_fetch_array($queryNoOfMale);

             echo $getNoMaleUsers['maleUser'] . ' MALE USERS';



                 ?>
                 </span>
               </a>
             </div>
            </div> 
            <div class="col-sm-4">
             <div class="inner-box">
               <a href=""> 
                <i class="fa fa-female"></i> 
                <h4>Female</h4>
                <span class="female-users">
                  <?php
             $noOfFeMale = "SELECT COUNT(gender) as femaleUser FROM user_registration WHERE gender = 'female' ";

             $queryNoOfFeMale = mysqli_query($connect,$noOfFeMale);
             
             $getNoFeMaleUsers = mysqli_fetch_array($queryNoOfFeMale);

             echo $getNoFeMaleUsers['femaleUser'] . ' FEMALE USERS';

             

                 ?>
                </span>
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