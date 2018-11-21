

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- BOOTSTRAP CSS-->
   <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

   <!--MY CSS -->
  <link rel="stylesheet" type="text/css" href="../style.css">

  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    <style type="text/css">
      
      .admin-image{ width: 80px; margin-top: 20px;}
      .adminName{padding-top: 50px;}
    </style>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg bg-danger" style="height:120px;">

        <img src="../images/images7.jpg" class="admin-image img-circle"> &nbsp <span class="adminName">Admin </span> <br> <soan style="padding-left:90px; ">online </span> 
          
        </div>
      
    </div>
  

</div>

       <div class="container-fluid">
           <div class="row">
               <div class="col-md-2 bg bg-success">
                 
                 <div class="panel-group" id="accordion">
   
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            Admin Inventory
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
              <a href="admin-inventory.php" >
                <span class="fa fa-circle-o"></span>
                Add To Inventory
              </a>
            </li>
            <li>
              <a href="admin-process-view-inventory.php">
                <span class="fa fa-circle-o"></span>
                View Inventory
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
            Admin Users
            <span class="pull-right"> 
              <span class="fa fa-angle-left"></span>
            </span>
          </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav">
            <li>
              <a href="admin-add-user.php" >
                <span class="fa fa-circle-o"></span>
                Add To User
              </a>
            </li>
            <li>
              <a href="admin-view-user.php">
                <span class="fa fa-circle-o"></span>
                View User
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>




    
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
            Transactions
            <span class="pull-right"> 
              <span class="fa fa-angle-left"></span>
            </span>
          </a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav">
            <li>
              <a href="admin-transaction.php" >
                <span class="fa fa-circle-o"></span>
                View Transactions
              </a>
            </li>
            </ul>
        </div>
      </div>
    </div>



               </div>

           </div>
       </div>









     


<!-- BOOTSTRAP JAVASCRIPT LINKING -->
<script src= "../../js/jquery-3.3.1.min.js" ></script>
<script src="../../js/bootstrap.min.js" ></script>


<!-- MY JAVASCRIPT LINKING-->
<script src="../../javascript/jquery.js"></script>
<script src="../../javascript/script.js"></script>

</body>
</html>
