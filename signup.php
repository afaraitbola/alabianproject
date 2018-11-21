<?php
$title="Registration";

require_once("db_config.php");

require_once("templates/header.php");
require_once("process-signup.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<title></title>
  <style>
    
  </style>

<!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	

	<!-- BOOTSTRAP CSS file linking -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
</head>
<body style="background-image:url(images/slider1.jpg)">

<div id="singup-back" style="width:100%; height:100%; background-color:rgba(0,0,0,0.8); left:0px; top:0px; margin-top:850px; position:fixed;">
  
</div>

<?php

    if (isset($_GET["status"]) && $_GET["status"] == "success") {
      
      echo "<div class='alert alert-success'> You have being Registered</div>";

    }elseif(isset($errorMessage)){
     
     echo "<div class='alert alert-danger'>{$errorMessage}</div>";

    }
?>

 <div class="signup-form" style="width:480px; height:550px;background-color:rgba(0,0,255,0.3); margin:auto; margin-top:150px; margin-bottom:200px; border: 2px dashed white;">



       <img src="images/lady.jpg" style="width:100px; height:100px; margin-top: -50px; margin-left: 190px; border-radius:50%;">

       <!-- REGISTRATION FORM -->

        <form align="center" name="userRegister" method="POST" action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
          <h3 class="text-primary">Registration</h3>

          <input type="text" name="lname" placeholder="Lastname" style="margin-right:5px; margin-top:30px;">

          <input type="text" name="fname" placeholder="Firstname" style="margin-left:5px;">

          <input type="text" name="address" placeholder="Address" style="margin-top:8px; width:370px; "><br>

          <input type="text" name="city" placeholder="City" style="margin-top:8px;">

          <input type="text" name="state" placeholder="State"><br>

          <input type="text" name="country" placeholder="Country" style="margin-top:8px; width:300px; "><br>

           <input type="text" name="emailAdd" placeholder="Email Adrress" style="margin-top:8px; width:300px; "><br>

          <input type="text" name="user" placeholder="Username" style="margin-top:8px;">

          <input type="password" name="pass" placeholder="Password"><br>

          <input type="radio" name="gender" value="male" style="margin-top:10px;"> <span style="color:white;">Male</span>

          <input type="radio" name="gender" value="female" ><span style="color:white; padding-left:5px;">Female</span> <br>


          

          <select style="margin-top:8px; width:200px; " name="seller-type">
            <option></option>
            <option name="seller-type" value="importer">Importer</option>
            <option name="seller-type" value="dealer">Dealer</option>
            <option name="seller-type" value="retailer">Retailer</option>
            <option name="seller-type" value="repairer">Repairer</option>
          </select><br><br>
        
  <input type="hidden" name="reg-date" placeholder="Registered Date"><br>


<button type="submit" name="register" class="btn btn-primary" style="margin-top:20px; width:150px;">Register</button>   




        </form>
  

    </div>

<script>
  
  var userRegistration = document.forms.userRegister;

function checkLastname() {
  
  if (userRegistration.lname.value ==="" || userRegistration.lname.value=== null) {

    userRegistration.lname.style.borderColor= "red";
    
  }else{

        userRegistration.lname.style.borderColor= "green";

  }
}


function checkFirstname() {
  
  if (userRegistration.fname.value ==="" || userRegistration.fname.value=== null) {

    userRegistration.fname.style.borderColor= "red";
    
  }else{

        userRegistration.fname.style.borderColor= "green";

  }
}


function checkAddress() {
  
  if (userRegistration.address.value ==="" || userRegistration.address.value=== null) {

    userRegistration.address.style.borderColor= "red";
    
  }else{

        userRegistration.address.style.borderColor= "green";

  }
}


function checkCity() {
  
  if (userRegistration.city.value ==="" || userRegistration.city.value=== null) {

    userRegistration.city.style.borderColor= "red";
    
  }else{

        userRegistration.city.style.borderColor= "green";

  }
}

function checkState() {
  
  if (userRegistration.state.value ==="" || userRegistration.state.value=== null) {

    userRegistration.state.style.borderColor= "red";
    
  }else{

        userRegistration.state.style.borderColor= "green";

  }
}


function checkCountry() {
  
  if (userRegistration.country.value ==="" || userRegistration.country.value=== null) {

    userRegistration.country.style.borderColor= "red";
    
  }else{

        userRegistration.country.style.borderColor= "green";

  }
}


function checkRegistrationUser() {
  
  if (userRegistration.user.value ==="" || userRegistration.user.value=== null) {

    userRegistration.user.style.borderColor= "red";
    
  }else{

        userRegistration.user.style.borderColor= "green";

  }
}

function checkRegistrationPass() {
  
  if (userRegistration.pass.value ==="" || userRegistration.pass.value=== null) {

    userRegistration.pass.style.borderColor= "red";
    
  }else{

        userRegistration.pass.style.borderColor= "green";

  }
}




userRegistration.lname.addEventListener("blur", checkLastname, false);
userRegistration.fname.addEventListener("blur", checkFirstname, false);
userRegistration.address.addEventListener("blur", checkAddress, false);
userRegistration.city.addEventListener("blur", checkCity, false);
userRegistration.state.addEventListener("blur", checkState, false);
userRegistration.country.addEventListener("blur", checkCountry, false);
userRegistration.user.addEventListener("blur", checkRegistrationUser, false);
userRegistration.pass.addEventListener("blur", checkRegistrationPass, false);

</script>



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