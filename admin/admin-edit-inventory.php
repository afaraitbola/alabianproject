<?php

 require_once("../db_config.php");
require_once("../functions.php");

require_once("template/admin-header.php");
require_once("template/admin-sidebar.php");
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
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <!-- FONT LINKING -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>


         <?php


         if (isset($_POST['adminEditPost'])) {
           

           $myId = $_POST['thePostId'];
           $getId = "SELECT * FROM post INNER JOIN category ON category.id = post.catid INNER JOIN user_registration ON user_registration.id = post.userid WHERE post.catid = $myId";

          $queryGetId = mysqli_query($connect,$getId);

          $fetchGetId = mysqli_fetch_assoc($queryGetId);

          $theMyId = $fetchGetId['id'];
          $goodssName = $fetchGetId['goods_name'];
          $descsName = $fetchGetId['goods_description'];
          $catssName = $fetchGetId['cat_name'];

         

         }

         ?>


    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-offset-3 col-md-6" id="editInventory">

        

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" style ="margin-top:-250px;">
  
  <h2>Edit Inventory</h2>
  <div class="form-group">
<input type="hidden" name="inventDate" class="form-control">
</div>


<div class="form-group">
<label>Good Name*</label>
<input type="text" name="gName" value="<?php echo $goodssName ?>" class="form-control" >
</div>

<div class="form-group">
<label>Category*</label>
<select class="form-control" name="catCat">
  <option></option>
  <option>Laptop</option>
  <option>Phone</option>
  <option>Gadgets</option>
  <option>Accessories</option>

</select>
</div>


<div class="form-group">
<label>Task Description*</label>
<textarea class="form-control" rows="10" name="adminTDescribe" value='<?php echo $descsName?>' > </textarea>
</div>

<div class="form-group">
<label>Type</label>
<input type="text" name="gType" class="form-control">
</div>

<button type='submit' class='btn btn-success btn-block' name='editInvent'>Edit Inventory</button> 

</form>
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