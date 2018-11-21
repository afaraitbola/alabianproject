<?php
$title="Login";

require_once("templates/header.php");
require_once("process-login.php");
require_once("process-user-rememberme.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<title></title>

<!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	

	<!-- BOOTSTRAP CSS file linking -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
</head>
<body style="background-image:url('images/slider2.jpg'); background-repeat: no-repeat;">


<div id="login-back" style="width:100%; height:100%; background-color:rgba(0,0,0,0.4); left:0px; top:0px; margin-top:850px; position:fixed;">
  

</div>

<div id="login-form" style="width:350px; height:400px; background-color:rgba(0,0,0,0.8); margin:auto; margin-top:150px; margin-bottom:200px; border-radius:5px; border:1px solid #337ab7;">
    <?php
      if (isset($errorMessages)) {
        
        echo "<div alert alert-danger> {$errorMessages} </div>";
      }
    ?>

   <img src="images/logo2.png" style="margin-left:135px; margin-top:40px;"><br>
   <span style="padding-left:120px; font-size:18px; color:white; font-weight:bold;">DIGITAL</span> <span style="color:#db1d8e;">VILLA</span>

   <form name="logonForm" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
     
     
     <input type="text" name="user" placeholder="Username or Email" style="background-color:transparent; margin-top:40px; margin-bottom:15px;margin-left:85px;"><br>

     
     <input type="password" name="pass" placeholder="Password" style="background-color:transparent;margin-left:85px; color:white;"><br>

     <input type="checkbox" name="remember" style="margin-left:85px; margin-top:20px; margin-right:10px;"> <span style="color:white;"> Remember me </span><br>

     <button type="submit" name="login" class="btn btn-success" style="width:180px; margin-left:85px; margin-top:10px; margin-bottom:20px;"> Login </button><br>

     <a href="forget-pass.php" style="padding-left:10px; text-decoration:none;">forget password?</a>
     <a href="signup.php" style="float:right; padding-right:10px; text-decoration:none;">Reigster</a>

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
require_once("templates/footer.php")
?>