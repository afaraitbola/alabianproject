<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<title>
		<?php
		if(isset($title)){
			echo $title;
		}else{

			echo "Page Title";
		}

			?>
	</title>

	

	<!-- BOOTSTRAP CSS file linking -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!-- MY OWN css file linking -->
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>


<div class="navbar-default">

<div class="container-fluid">
	 <nav class="navbar-header">
       <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target="#upper-menu">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       </button>

   <a href="index.php"><img src="images/logo.jpg" style="width:80px; height:70px;float:left;"></a> 
   </nav>
       <div id="upper-menu" class="collapse navbar-collapse">

    <ul class="nav navbar-nav" style="padding-left:50px;">
    	<li><a href="index.php" <?php if ($title="Home") echo "class='active'"; ?>>Home</a></li>
    	<li><a href="about-us.php" <?php if ($title="About Us") echo "class='active'"; ?>>About Us</a></li>
    	<li><a href="contact-us.php" <?php if ($title="About Us") echo "class='active'"; ?>>Contact Us</a></li>
    	<li><a href="faq.php" <?php if ($title="About Us") echo "class='active'"; ?>>FAQ</a></li>

    </ul>

    <ul class="nav navbar-nav navbar-right">
    	<li><a href="login.php" <?php if ($title="Login") echo "class='active'"; ?>>Login</a></li>
    	<li><a href="signup.php" <?php if ($title="SignUp") echo "class='active'"; ?>>SignUp</a></li>
    </ul>
	   	
	   </div>
		
</div>
</div>








<!-- MY OWN javascript/jquery file linking -->
<script src="../javascript/jquery.js" ></script>
<script src="../javascript/script.js"></script>



<!-- BOOTSTRAP javascript/jquery file linking -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>







</body>
</html>