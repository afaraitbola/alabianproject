<?php
$title="Contact Us";

require_once("templates/header.php");
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
<body>

<section id="contact">
                  <h2>Contact Us</h2>
<div class="container" style="margin-top:100px; margin-bottom:100px;">
    <div class="row">
       <div class="col-md-6 address" >
         
      <p style="text-align:center; font-size:20px;">
        Phone: 08032716181<br>
        Address:14, Wealthy street<br>
        Lekki Phase 1,Lagos.
       Email: info@digitalvilla.com
      </p>
            

       </div>

       <!--GOOGLE MAP -->

       <div class="col-md-6 address-map">


       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3417326685044!2d3.342219949762498!3d6.60438732402798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d7c33eb87b3%3A0xfc23c9556f669273!2sAlabian+Solutions+Limited!5e0!3m2!1sen!2sng!4v1538837034444" width="600" height="450" frameborder="0" style="border:0; margin-top:-80px; margin-left:-16px; width:395px; height: 290px; " allowfullscreen></iframe>

        

       </div>
    </div>
  
</div>
  

</section>


<section>

<h3 style="font-weight:bolder; padding-left:100px;">Let's Be Friends</h3>


<hr style=" width:80px; height:5px; background-color:#65b3ef; margin-right:1070px; margin-bottom:50px; margin-top:30px;">


<div id="social-media" style="width:1100px; height:400px; margin:auto; margin-bottom:100px; border:1px solid #65b3ef; border-radius:5px;">


<div class="social-image" style="width:400px; height:380px; background-color:blue; position:absolute; margin-top:10px; margin-left:50px;">
  

  <img src="images/join.jpg" style="width:400px; height:380px;">
</div>



<div class="social1" style="width:200px; height:190px;background-color:#017fd9; margin-left:450px; position:absolute;margin-top:10px;">
  
  <h1 style="text-align:center; padding-top:30px; font-size:bolder; color:white;"> Connect With Us</h1>
</div>

 <a href="www.facebook.com/alabiansolutions"><div class="social2" style="width:200px; height:190px; margin-left:650px; margin-top:10px; position:absolute;">

  <img src="images/FACEBOOK.png" style="width:70px; height:65px; margin-left:65px; margin-top:20px;">
   <p style="text-align:center;font-size:17px; padding-top:10px; color:#45619d;">Connect with us on <br> Facebook</p>
</div></a>
  

  <a href="www.twitter.com/alabiansolution"><div class="social3" style="width:200px; height:190px; margin-left:850px; margin-top:10px; position:absolute;">
    <img src="images/TWITTER.png" style="width:70px; height:65px; margin-left:65px; margin-top:20px;">
       <p style="text-align:center;font-size:17px; padding-top:10px; color:#65b3ef">Tweet @ Us On <br>Twitter</p>

</div></a>

<a href="linkedln.com/alabiansolution"><div class="social4" style="width:200px; height:190px; margin-left:450px; margin-top:200px; position:absolute;">
  
  <img src="images/download.png" style="width:70px; height:65px; margin-left:65px; margin-top:20px;">

     <p style="text-align:center;font-size:17px; padding-top:10px; color:#3995c6;">Connect with us on<br> Linkedin</p>


</div></a>


<a href="linkedln.com/alabiansolution"><div class="social5" style="width:200px; height:190px; margin-left:650px; margin-top:200px; position:absolute;">
  
  <img src="images/instgram.jpg" style="width:70px; height:65px; margin-left:65px; margin-top:20px;">

     <p style="text-align:center;font-size:17px; padding-top:10px;color:#ca72a3;">Follow Us on <br>Instagram</p>


</div></a>

<div class="social6" style="width:200px; height:190px; margin-left:850px; margin-top:200px; position:absolute;">
  
</div>


</div>


</section>


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