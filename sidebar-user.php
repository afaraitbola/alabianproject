<?php
require_once('db_config.php');
require_once('functions.php');
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


<div class="col-sm-3" id="sidebarUser">
  <div class="row">
    <div class="col-sm-3">
      <img src="images/lady.jpg" class="img-circle" style="width:60px; height:60px; ">
    </div>
    <div class="col-sm-10">
    <?php echo $getLastName['lname'];
?>
      <br>
      <span class="fa fa-circle text-success"></span>
      Online<br>
    </div>
  </div>
  <div class="panel-group" id="accordion">
   
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            Inventory
            <span class="pull-right"> 
              <span class="fa fa-angle-left"></span>
            </span>
          </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav">
            <li>
              <a href="add-inventory.php" >
                <span class="fa fa-circle-o"></span>
                Add To Inventory
              </a>
            </li>
            <li>
              <a href="view-inventory.php">
                <span class="fa fa-circle-o"></span>
                View Inventory
              </a>
            </li>
            <li>
              <a href="others-inventory.php">
                <span class="fa fa-circle-o"></span>
                Other's Inventory
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          Transaction</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav">
            <li><a href="#">Create Transaction</a></li>
            <li><a href="#">View Transaction</a></li>
          </ul>
        </div>
      </div>
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