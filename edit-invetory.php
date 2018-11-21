<?php
session_start();
   require_once("db_config.php");
   require_once("functions.php");
   require_once("user-header.php");
   require_once("sidebar-user.php");
   require_once("process-edit-inventory.php");
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

  <!-- FONT LINKING -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>


<?php
   $id = loggedIn();

   $getInventory = "SELECT goods_name,goods_description,catid FROM post INNER JOIN category ON category.id = post.catid INNER JOIN user_registration ON user_registration.id = post.userid WHERE $id = post.userid";

   



   $inventQuery = mysqli_query($connect,$getInventory);

  


if (!$inventQuery) {
 die("could not connect query" .mysqli_error($connect));
}

   $fetchInvent = mysqli_fetch_assoc($inventQuery);



    $Gname = $fetchInvent['goods_name'];
    $Tdescribe = $fetchInvent['goods_description'];
    $Gtype = $fetchInvent['catid'];


    $getCat = "SELECT cat_name FROM category WHERE id = $Gtype";


    $queryCat = mysqli_query($connect,$getCat);
 


    $fetchCat = mysqli_fetch_assoc($queryCat);


    $typeGoods = $fetchCat['cat_name'];

?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" id="editInventory">

        <?php
        
         if (isset($_GET['status']) && $_GET['status'] == 'edited') {
           
           echo "<div class='alert alert-success'>Successfully Edited</div>";
         }

         if (isset($editErrorMessage)) {
          
          echo "<div class= 'alert alert-danger'>$editErrorMessage</div>";
         }

        ?>

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
  
  <h2>Edit Inventory</h2>
  <div class="form-group">
<input type="hidden" name="inventDate" class="form-control">
</div>

<div class="form-group">
<label>Good Name*</label>
<input type="text" name="gName" class="form-control" value="<?php echo "$Gname"; ?>">
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
<textarea class="form-control" rows="10" name="tDescribe"><?php echo "$Tdescribe";?></textarea>
</div>

<div class="form-group">
<label>Type</label>
<input type="text" name="gType" class="form-control" value="<?php echo $typeGoods ?>">
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