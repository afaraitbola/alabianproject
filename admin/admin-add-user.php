<?php
   require_once("../db_config.php");
   require_once("../functions.php");
   require_once("template/admin-header.php");
   require_once("template/admin-sidebar.php");
   require_once("admin-process-add-user.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- BOOTSTRAP CSS-->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

   <!--MY CSS -->
  <link rel="stylesheet" type="text/css" href="../style.css">

  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    

</head>
<body style="background-image:url(../images/slider1.jpg); ">



 <div class="signup-form" style="width:480px; height:550px;background-color:rgba(0,0,255,0.3); margin:auto; margin-top:-80px; margin-bottom:200px; border: 2px dashed white;">


<?php

if (isset($_GET['status']) && $_GET['status'] == 'granted') {
  
  echo "<div class='alert alert-success'>Successfully Registered User</div>";
}elseif (isset($theMessageErr)) {
  
      echo "<div class='alert alert-danger'>{$theMessageErr}</div>";
}

?>


       <img src="../images/lady.jpg" style="width:100px; height:100px; margin-top: -50px; margin-left: 190px; border-radius:50%;">

       <!-- REGISTRATION FORM -->

        <form align="center" name="userRegister" method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
          <h3 class="text-primary">Registration</h3>

          <input type="text" name="lastname" placeholder="Lastname" style="margin-right:5px; margin-top:30px;">

          <input type="text" name="firstname" placeholder="Firstname" style="margin-left:5px;">

          <input type="text" name="add" placeholder="Address" style="margin-top:8px; width:370px; "><br>

          <input type="text" name="cityUser" placeholder="City" style="margin-top:8px;">

          <input type="text" name="stateUser" placeholder="State"><br>

          <input type="text" name="country" placeholder="Country" style="margin-top:8px; width:300px; "><br>

           <input type="text" name="eAddress" placeholder="Email Adrress" style="margin-top:8px; width:300px; "><br>

          <input type="text" name="userName" placeholder="Username" style="margin-top:8px;">

          <input type="password" name="passWord" placeholder="Password"><br>

          <input type="radio" name="gender" value="<?php echo '$male' ?>" style="margin-top:10px;"> <span style="color:white;">Male</span>

          <input type="radio" name="gender" value="<?php echo '$female' ?>" ><span style="color:white; padding-left:5px;">Female</span> <br>


          

          <select style="margin-top:8px; width:200px; " name="sellerType">
            <option></option>
            <option name="sellerType" value="importer">Importer</option>
            <option name="sellerType" value="dealer">Dealer</option>
            <option name="sellerType" value="retailer">Retailer</option>
            <option name="sellerType" value="repairer">Repairer</option>
          </select><br><br>
        
  <input type="hidden" name="RegDate" placeholder="Registered Date"><br>


<button type="submit" name="signUp" class="btn btn-primary" style="margin-top:20px; width:150px;">Register</button>   




        </form>




     


<!-- BOOTSTRAP JAVASCRIPT LINKING -->
<script src= "../js/jquery-3.3.1.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>


<!-- MY JAVASCRIPT LINKING-->
<script src="../../javascript/jquery.js"></script>
<script src="../../javascript/script.js"></script>

</body>
</html>
