<?php 
    session_start();
    require_once("db_config.php");
    require_once("functions.php");
    require_once("add-inventory-process.php");
    require_once("user-header.php");
    require_once("sidebar-user.php");
    $title = "Add Task/Edit Task";
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
  <body id="admin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" id="admin-main-content">

        <?php
           
         if (isset($_GET['status']) && $_GET['status'] == 'success') {
           
              echo "<div class = 'alert alert-success'> Successfuly submitted </div>";

         }elseif (isset($errorFormMessage)) {
           
           echo "<div class='alert alert-danger'>  {$errorFormMessage} </div>";

         }
        ?>
          
          <h3>Add To Inventory</h3>
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" class="form" method="POST">
          <div class="form-group">

         
              <input type="hidden" class="form-control" 
              name="postDate" value="<?php echo $postdate ?>"> 
            </div> 

            <div class="form-group">
              <label>Good Name</label>*
              <input type="text" class="form-control" placeholder="Good Name" 
              name="goodName" value="<?php echo $goodname ?>">
            </div>

            <div class="form-group">
            <label>Category</label>*
              <select class="form-control"  name="categories">
                 <option></option>
                <option name="categories" value="laptop">Laptop</option>
                <option name="categories" value="phone">Phone</option>
                <option name="categories" value="gadgets">Gadgets</option>
                <option name="categories" value="accessories">Accessories</option>
              </select> 
            </div> 

            <div class="form-group">
              <label>Task Description</label>*
              <textarea class="form-control" rows="10" name="description" value = "<?php echo "$descriptions"; ?>"></textarea>
            </div>





<div class="form-group">
  
 <input class="form-control" type="hidden" name="userId" value="<?php echo $userid ?>"> 
</div>


<div class="form-group">
<label>Type</label>
  <input class= "form-control" type="text" name="catid" value="<?php echo $catId ?>">

</div>



            

            <button type='submit' class='btn btn-success btn-block' name='addInvent'>Add Inventory</button> 

            
          </form>
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