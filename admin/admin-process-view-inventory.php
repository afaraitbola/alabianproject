<?php

require_once("../db_config.php");
require_once("../functions.php");

require_once("template/admin-header.php");
require_once("template/admin-sidebar.php");
require_once("admin-process-delete-inventory.php");
require_once("admin-process-edit-inventory.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- BOOTSTRAP CSS-->
   <link rel="stylesheet" type="text/css" href=" ../css/bootstrap.min.css">

   <!--MY CSS -->
  <link rel="stylesheet" type="text/css" href="../style.css">

  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


<style type="text/css">
  
  table{margin-top: -180px; }
</style>
    

</head>
<body>
<div class="container">
     <div class="row">
         <div class="col-md-offset-2 col-md-10">
  





           
           <?php


           $getTheInvetory = "SELECT * FROM post INNER JOIN user_registration ON user_registration.id = post.userid INNER JOIN category ON category.id = post.catid ";



           $queryGetTheInventory = mysqli_query($connect, $getTheInvetory);


           if (!$queryGetTheInventory) {
             die("could not query queryGetTheInventory" .mysqli_error($connect));
           }

           $fetchTheInventory = mysqli_fetch_assoc($queryGetTheInventory);

           
             
             $table = "<table class='table table-bordered table-striped'>";
             $table .= "<tr>";
             $table .= "<th> DATE POSTED</th>";
             $table .= "<th> GOODS NAME</th>";
             $table .= "<th> GOODS TYPE</th>";
             $table .= "<th> DESCRIPTION </th>";
             $table .= "<th> USER POSTED</th>";
             $table .= "<th> CATEGORY TYPE</th>";
             $table .= "<th> DELETE </th>";
             $table .= "<th> EDIT</th>";
             $table .= "</tr>";


             while ($fetchTheInventory = mysqli_fetch_assoc($queryGetTheInventory)) {
              
                $table .= "<tr>";
               $table .= "<td>{$fetchTheInventory['post_date']}</td>";
               $table .= "<td>{$fetchTheInventory['goods_name']}</td>";
               $table .= "<td>{$fetchTheInventory['category_type']}</td>";
               $table .= "<td>{$fetchTheInventory['goods_description']}</td>";
               $table .= "<td>{$fetchTheInventory['lname']}</td>";
               $table .= "<td>{$fetchTheInventory['cat_name']}</td>";
               $table .= "<form method ='POST'>";
               
               $table .= "<td><input type='submit' name = 'delete' value='DELETE' ></td>";
               $table .= "<td><button type='submit' name='adminEditPost'><a href='admin-edit-inventory.php'>EDIT</a></button></td>";
               $table .= "<input type='hidden' name='thePostId' value='$fetchTheInventory[id]'> ";
               
               
               $table .= "</form>";
               $table .= "</tr>";


             

             }
            
            $table .= "</table>";

            echo $table;
           ?>




         </div>
       


     </div>
  



</div>






     


<!-- BOOTSTRAP JAVASCRIPT LINKING -->
<script src= "../js/jquery-3.3.1.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>


<!-- MY JAVASCRIPT LINKING-->
<script src="../../javascript/jquery.js"></script>
<script src="../../javascript/script.js"></script>

</body>
</html>
