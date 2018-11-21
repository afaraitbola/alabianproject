<?php
session_start();
require_once('db_config.php');
require_once('functions.php');
require_once('process-search-user-invent.php');

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>

   <!-- MY OWN css file linking -->
<link rel="stylesheet" type="text/css" href="style.css">
  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  

  <!-- BOOTSTRAP CSS file linking -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>



   <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">

          <?php
             require_once('user-header.php');
             require_once('sidebar-user.php');
          ?>



          <form method="GET" action="invent-search-result.php" style="float:right; margin-top:10px;">
	
	<input type="text" name="search-invent"><input type="submit" name="submit-search">

</form>


          	<h2 style="text-align:center; padding-top:20px;">OTHERS INVENTORY</h2>
          <?php
   //give the user logged a variable 
          $id = loggedIn();


          //select the all the post from all other user apart from the login user

          $othersInvent = "SELECT * FROM post INNER JOIN user_registration ON user_registration.id = post.userid WHERE post.userid < $id  OR post.userid > $id";

         

          $theQuery = mysqli_query($connect, $othersInvent);
          

          //FETCH ALL THE DETAILS OF THE POST OF OTHER USERS

          $fetchThem = mysqli_fetch_assoc($theQuery);
           

           	$table =  "<table class='table table-bordered table-striped'>";
          	$table .= "<tr>";
          	$table .= "<th>Date Posted</th>";
          	$table .= "<th>Goods Name</th>";
          	$table .= "<th>Type</th>";
          	$table .= "<th>Description</th>";
          	$table .= "<th>Name</th>";
          	$table .= "<th>Address</th>";
          	$table .= "<th>Sellers Type</th>";
          	$table .= "<th>Email</th>";
          	$table .= "</tr>";

           //start fetch all the one you want to display in a table

          while ($fetchThem = mysqli_fetch_assoc($theQuery)) {
          	
          	$table .= "<tr>";
          	$table .= "<td>{$fetchThem['post_date']}</td>";
          	$table .="<td>{$fetchThem['goods_name']}</td>";
          	$table .= "<td>{$fetchThem['category_type']}</td>";
          	$table .="<td>{$fetchThem['goods_description']}</td>";
          	$table .= "<td>{$fetchThem['lname']} . {$fetchThem['fname']}</td>";
          	$table .="<td>{$fetchThem['address']}</td>";
          	$table .= "<td>{$fetchThem['seller_type']}</td>";
          	$table .="<td>{$fetchThem['email']}</td>";
          	$table .= "</tr>";

          }

          $table .= "</table>";

          echo $table;
     
       

       


          
          ?>


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