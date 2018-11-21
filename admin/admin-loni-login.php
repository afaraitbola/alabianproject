<?php
require_once("../db_config.php");
require_once("../functions.php");

require_once("admin-login-process.php");
require_once("../templates/header.php")

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<title></title>

<!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="../style.css">
  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	

	<!-- BOOTSTRAP CSS file linking -->
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<style type="text/css">
  

  #adminForm {width: 350px; height: 350px; background-color: rgba(255,165,0,0.4); margin:auto; margin-top: 150px; margin-bottom: 150px; border: 2px dotted blue;border-radius: 5px;  color: blue;}

  #adminForm .theAdminForm input[type='text'] { margin-top: 10px }
</style>
	
</head>
<body style="background-image:url('../images/slider2.jpg'); background-repeat: no-repeat;">


<div id="adminForm" >
 <?php
   if (isset($adminErrorMessage)) {
     
      echo "<div class= 'alert alert-danger'> $adminErrorMessage </div>";
   }
 ?>


<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" align="center"; class="theAdminForm" >

 <h4 style="padding-top:20px;">Admin Login</h4>
  
<label>Username</label>
<input type="text" name="adminUser" placeholder="USERNAME" style="margin-top:20px;"><br>

<label>Password</label>
<input type="password" name="adminPass" placeholder="PASSWORD" style="margin-left:5px;"> <br>

<input type="submit" name="checkIn" value="Log-In" style="width:180px; margin-top:20px; margin-left:70px; background-color:blue; color:white;">


</form>
    
</div>



  

  



<!-- MY OWN javascript/jquery file linking -->
<script src="javascript/jquery.js" ></script>
<script src="javascript/script.js"></script>



<!-- MY BOOTSTRAP javascript/jquery file linking -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>




</body>
</html>

<?php 
require_once("../templates/footer.php")
?>