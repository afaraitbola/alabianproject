<?php
session_start();
   require_once("db_config.php");
   require_once("functions.php");
   require_once("user-header.php");
   require_once("sidebar-user.php");
   require_once("process-delete-inventory.php");
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

  <style type="text/css">
    
    .table{ margin-top: -150px; }
  </style>

</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-offset-3 col-md-9">

<?php

$id = loggedIn();

$field = array("post_date","goods_name","category_type","goods_description","cat_name");
$implode = implode("," , $field);



$sql = "SELECT $implode FROM post INNER JOIN category ON category.id = post.catid INNER JOIN user_registration ON user_registration.id = post.userid WHERE $id = post.userid";


$resultSql = mysqli_query($connect,$sql);


if (!$resultSql) {
	
	die("could not run query resultSql" .mysqli_error($connect));
}



$table = "<table class='table table-bordered table-striped'>";
$table .= "<tr>";
$table .= "<th> Posted Date </th>";
$table .= "<th>Product Name </th>";
$table .= "<th>Product Type</th>";
$table .= "<th>Product Description </th>";
$table .= "<th>Seller Category</th>";
$table .= "<th>Delete</th>";
$table .= "<th>Edit</th>";
$table .= "</tr>";

while ($getGetData = mysqli_fetch_assoc($resultSql)) {


	

	$table .="<tr>";
	$table .= "<td>{$getGetData['post_date']}</td>";
    $table .= "<td>{$getGetData['goods_name']}</td>";
    $table .= "<td>{$getGetData['category_type']}</td>";
    $table .= "<td>{$getGetData['goods_description']}</td>";
    $table .= "<td>{$getGetData['cat_name']}</td>";
    $table .="<form method='GET'>";
    $table .= "<td><button name=delete>Delete</button></td>";
    $table .= "</form>";
    $table .= "<td><button name=edit><a href='edit-invetory.php'>Edit</a></button></td>";
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
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>


</body>
</html>