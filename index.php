<?php
$title="Home";

require_once("templates/header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
	<title></title>



    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

	<!-- BOOTSTRAP CSS file linking -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- MY OWN css file linking -->
      <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>



<!-- SLIDER STARTS FROM HERE-->
<section id="slider" style=" height: 500px; margin-top:30px;">
	<div class="container-fluid">
	   <div class="row">
	      <div class="col-md-12">
	      
    <div id="myCarousel" class=" carousel slide" data-ride="carousel">
      <!--INDICATORS -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to = "0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to = "1"></li>
          <li data-target="#myCarousel" data-slide-to = "2"></li>
        
      </ol>

            <!--WRAPPER FOR SLIDES -->

            <div class="carousel-inner">
               <div class="item active">
                  <img src="images/slider1.jpg" alt="first image" style="width:100%">
                  <div class="carousel-caption">
                  <h2>CONNECTIVITY</h2>
                  <p style="font-size:20px;">Connect Your Business More, To Other Vendors</p>
                    
                  </div>
                 
               </div>

               <div class="item">
                 <img src="images/slider2.jpg" alt="second image">
                 <div class="carousel-caption">
                 <h2>TRUSTWORTHY</h2>
                 <p style="font-size:20px;">We Connect You With The Trusted Vendors Related To Your Business</p>
                   
                 </div>

               </div>

               <div class="item">
                 <img src="images/pexels-photo.jpg" alt="third image">
                 <div class="carousel-caption">
                 <h2>SALES</h2>
                 <p style="font-size:20px;">Increase Your Sales And Always Have Stock For Your Customers</p>

               </div>

            </div>

                  <!--LEFT AND RIGHT CONTROLS -->

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span></a>



        <a class="right carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span></a>



    </div>   

	      </div>
	   	

	   </div>
		
	</div>
</section>
<!-- SLIDER ENDS HERE -->



<section id="vendor" style="margin-top:80px;">
	<h4 style="border-bottom:100px; border-color:blue; padding-top:20px; text-align:center;">As a Vendor or repairer of Computer,Laptops,Phone,Gadgets and Spare Parts, Our Platform allows you to</h4>
	<hr style="height:2px;width: 150px; background-color:blue; margin-bottom:5s0px;">

	<div class="container">
	    <div class="row">
	       <div class="col-md-offset-1 col-md-2">
           <div class="vendorRegLog">
           <span class="badge">1</span>
           <p>ALLOWS VENDORS TO <br>REGISTER <br>&amp<br> LOGIN</p>
           	
           </div>
	       </div>


	       <div class="col-md-2">
            <div class="vendorConnect">
            <span class="badge">2</span> 
            <p>GET CONNECTED <br>TO OTHER <br>VENDORS <br>AROUND YOU</p>


           </div>
	       </div>


	       <div class="col-md-2">
           <div class="vendorInventory">
            <span class="badge">3</span>
            <p>CHECK <br>OTHER <br>VENDORS <br>INVENTORY</p>
           	
           </div>
	       </div>


	       <div class="col-md-2">
             <div class="vendorCustomerNeed">
               <span class="badge">4</span>
               <p>ALWAYS <br>GET YOUR <br>CUSTOMERS <br>NEED</p>
           	
           </div>
	       </div>

	       <div class="col-md-2">
              <div class="vendorIncreaseSales">
                <span class="badge">5</span>
           	    <p>INCREASE <br> YOUR <br> SALES</p>
           </div>
	       </div>
	    	
	    </div>
		
	</div>
</section>


<!-- DISPLAY FOR vendorRegLog AFTER CLICK-->
<section>
  <div id="vendorRegLogBack" style="width:100%; height:100%; background-color:rgba(0,0,0,0.4); left:0; top:0; position:fixed; display:none;">

<div class="vendorRegLogDisplay1" style="width:300px; height:150px; margin:auto;margin-top:200px; background-color:white; border:2px dashed #2f479b; border-radius:5px; display:none;">

  <p style="text-align:center; padding-top:30px; ">
      We allow vendors in the industry of technology to register, login and create an archieve for the products they have in stock so that the other vendors can view their archieve.
  </p>
  
</div>

<div class="vendorRegLogDisplay2" style="width:300px; height:150px; margin:auto; background-color:white; margin-top:200px; border:2px dashed #f9c90e; border-radius:5px; display:none;">
  
  <p style="text-align:center; padding-top:30px; color:black;">

     Get connected to other vendors in the tech industry, such as importers,dealers,retailers and repairers to know what they all have in stock and to be able to communicate with them based on the products you see in their archieve.
   </p>
  
</div>

<div class="vendorRegLogDisplay3" style="width:300px; height:150px; margin:auto; margin-top:200px; background-color: white; border:2px dashed #da1e8e; border-radius:5px; display:none;">
  <p style="text-align:center; padding-top:30px; color:#da1e8e;">

     Get connected to other vendors in the tech industry, such as importers,dealers,retailers and repairers to know what they all have in stock and to be able to communicate with them based on the products you see in their archieve.

  </p>
  
</div>

<div class="vendorRegLogDisplay4" style="width:300px; height:150px; margin:auto; margin-top:200px;background-color: white; border:2px dashed #20a6dd; border-radius:5px; display:none;">
  
  <p style="text-align:center; padding-top:30px; color:#20a6dd;">

     Never run out of stock for your customers,even when you don't have the item or products in stock,always vendors will surely have,that is why we got your back to be able to serve your customers easily.
  </p>
  
</div>

<div class="vendorRegLogDisplay5" style="width:300px; height:150px; margin:auto; margin-top:200px; background-color:white; border:2px dashed #733e9a; border-radius:5px; display:none;">

  <p style="text-align:center; padding-top:30px; color:#733e9a;">

     Increase your sales on a daily basis as your customers comes in,cos even if the item is not available ,other vendors got your back and makes you to always smile to the bank always.
  </p>
  
</div>


  </div>
</section>
<!-- END OF DISPLAY FOR vendorRegLog AFTER CLICK-->


<section id="culture">
	
	<div class="container">
	   <div class="row">
	     <div col-md-12>
	          <h3 style="text-align:center;font-size:40px;   font-family: 'Righteous', cursive;">Our Culture</h3>
	          <hr style="height:2px; background-color:blue; width:100px; ">
	          <p style="text-align:center;   font-family: 'Righteous', cursive;
">We make sure you get connected to your close vendors and make sure you get the best of the best products from good vendors and also we make sure you get great offers from different vendors on daily basis</p>

<p style="text-align:center; padding-top:30px; font-size:18px; font-weight:bold;">Register as a Vendor Today and Increase Your Sales <a href="signup.php"><button style="background-color:blue; width:150px; height:50px;font-size:20px; color:white; border:0px solid; border-radius:5px;">Register Now</button></a></p>
	     	
	     </div>
	   	
	   </div>
		
	</div>
</section>


<section id="brand">
    <div class="container">
      <div class="row">


        <h3>BRANDS</h3>
        <hr>
        <div class="col-md-2">
        	<img src="images/dell.png" class="brand-image">
        </div>


         <div class="col-md-2">
         	<img class="brand-image" src="images/hp.png">
         </div>


         <div class="col-md-2">
         	<img src="images/apple.png" class="brand-image">
         </div>


         <div class="col-md-2">
         	<img src="images/compaq.png" class="brand-image">

         </div>



         <div class="col-md-2">
         	<img src="images/lenovo.png" class="brand-image">
         </div>



         <div class="col-md-2">
         	<img src="images/toshiba.png" class="brand-image">
         </div>

      	
      </div>
    	
    </div>
	



	<div class="container" style="margin-top:50px;">
      <div class="row">
        <div class="col-md-2">
        	<img src="images/tecno.png"  class="brand-image">
        </div>


         <div class="col-md-2">
         	<img src="images/samsung.png" class="brand-image">
         </div>


         <div class="col-md-2">
         	<img src="images/sony.png" class="brand-image">
         </div>


         <div class="col-md-2">
         	<img src="images/motorola.png" class="brand-image">
         </div>



         <div class="col-md-2">
         	<img src="images/nokia.png" class="brand-image">
         </div>



         <div class="col-md-2">
         	<img src="images/infinix.png" class="brand-image">
         </div>

      	
      </div>
    	
    </div>
</section>


<script>
  <!--DISPLAY AND HIDE BOX 1-->
  $(".vendorRegLog") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay1") .show();

});

   $("#vendorRegLogBack") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay1") .hide();

});
<!--END DISPLAY AND HIDE BOX 5-->





<!--DISPLAY AND HIDE BOX 2-->
    $(".vendorConnect") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay2") .show();

});

      $("#vendorRegLogBack") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay2") .hide();

});


      <!--END DISPLAY AND HIDE BOX 2-->





  <!--DISPLAY AND HIDE BOX 3-->

      $(".vendorInventory") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay3") .show();

});

        $("#vendorRegLogBack") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay3") .hide();

});

        <!-- END DISPLAY AND HIDE BOX 3-->





<!--DISPLAY AND HIDE BOX 4-->

        $(".vendorCustomerNeed") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay4") .show();

});

          $("#vendorRegLogBack") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay4") .hide();

});
<!--END DISPLAY AND HIDE BOX 4-->





          <!--DISPLAY AND HIDE BOX 5-->

          $(".vendorIncreaseSales") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay5") .show();

});


  $("#vendorRegLogBack") .click(function(){

  $("#vendorRegLogBack, .vendorRegLogDisplay5") .hide();

});

  <!--END DISPLAY AND HIDE BOX 5-->
  



</script>

<!-- MY OWN javascript/jquery file linking -->
<script src="../javascript/jquery.js" ></script>
<script src="../javascript/script.js"></script>



<!-- MY BOOTSTRAP javascript/jquery file linking -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>







</body>
</html>

<?php 
require_once("templates/footer.php")
?>