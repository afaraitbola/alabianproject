<?php

  require_once("../db_config.php");
  require_once("template/admin-header.php");
  require_once("template/admin-sidebar.php");
  require_once("admin-process-delete-user.php");
  require_once("admin-process-edit-user.php");
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- BOOTSTRAP CSS-->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

   <!--MY CSS -->
  <link rel="stylesheet" type="text/css" href="../style.css">

  <!-- font linking style sheet -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<style type="text/css">
	
	.table{margin-left: 200px};
</style>
   

</head>
<body>

<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
<?php

//select the user 

$theUsers = "SELECT * FROM user_registration";

$queryTheUsers = mysqli_query($connect, $theUsers);

 if (!$queryTheUsers) {
 	
 	die("could not query theUsers" .mysqli_error($connect));
 }


 //fetch the users details

 $fetchTheUsers = mysqli_fetch_assoc($queryTheUsers);
 $table = "<table class='table table-bordered table-striped'>";
 $table .="<tr>";
 $table .= "<th>Lastname</th>";
 $table .= "<th>Firstname</th>";
 $table .= "<th>Address</th>";
 $table .= "<th>City</th>";
 $table .= "<th>State</th>";
 $table .= "<th>Country</th>";
 $table .= "<th>Email Address</th>";
 $table .= "<th>Username</th>";
 $table .= "<th>Gender</th>";
 $table .= "<th>Business Level</th>";
 $table .= "<th>Date Of Registration</th>";
 $table .= "<th>Delete</th>";
 $table .= "<th>Edit</th>";
 $table .= "</tr>";

 while ($fetchTheUsers = mysqli_fetch_assoc($queryTheUsers)) {
 	
 	$table .= "<tr>";
 	$table .= "<td>{$fetchTheUsers['lname']}</td>";
 	$table .= "<td>{$fetchTheUsers['fname']}</td>";
 	$table .= "<td>{$fetchTheUsers['address']}</td>";
 	$table .= "<td>{$fetchTheUsers['city']}</td>";
 	$table .= "<td>{$fetchTheUsers['state']}</td>";
 	$table .= "<td>{$fetchTheUsers['country']}</td>";
 	$table .= "<td>{$fetchTheUsers['email']}</td>";
 	$table .= "<td>{$fetchTheUsers['user']}</td>";
 	$table .= "<td>{$fetchTheUsers['gender']}</td>";
 	$table .= "<td>{$fetchTheUsers['seller_type']}</td>";
 	$table .= "<td>{$fetchTheUsers['registered_date']}</td>";
  $table .= "<form method='POST'>";
 	$table .= "<td><button type='submit' name=theDelete onclick='return checkUserDelete()'>DELETE</button></td>";

 	$table .= "<td><button type='submit' name='theEdit' value='theEdit'><a href='admin-edit-user.php'>EDIT</a></button></td>";
  $table .="<input type='hidden' name='adminDelUser' value='$fetchTheUsers[id]'>";
  $table .= "</form>";
 	$table .= "</tr>";
 }

   $table .= "</table>";

   echo "$table";
?>


</div>
     </div>
</div>


<!-- BOOTSTRAP JAVASCRIPT LINKING -->
<script src= "../js/jquery-3.3.1.min.js" ></script>
<script src="../js/bootstrap.min.js" ></script>


<!-- MY JAVASCRIPT LINKING-->
<script src="../javascript/jquery.js"></script>
<script src="../javascript/script.js"></script>


<script>
  
  function checkUserDelete(){
      var toDelete = confirm("Are you sure want to delete this User");

          if (toDelete==true) {

            alert("User Deleted");

          }else{

            alert("User not Deleted");
          }

          return toDelete;
  }
</script>

</body>
</html>
