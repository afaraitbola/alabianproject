<?php
require_once("db_config.php");
require_once("functions.php");

if (isset($_GET['submit-search'])) {
	
	// set a  variable for the details put in the search space and also make sure you do not allow them enter an sql or html entities inside the text box //

	$theSearch = sanitize($_GET['search-invent']);


//SELEECT THE LIKELY DETAILS FROM POST WHEN THE USER ENTER A SEARCH IN THE TEXT BOX

	$getSearch = "SELECT * FROM post INNER JOIN user_registration ON user_registration.id = post.userid WHERE post_date LIKE '%$theSearch%' OR goods_name LIKE '%$theSearch%' OR category_type LIKE '%$theSearch%' OR goods_description LIKE '%$theSearch%' ";


	$queryGetSearch = mysqli_query($connect, $getSearch);





	//the numbers of result get in the row when searching 

	$result = mysqli_num_rows($queryGetSearch);



//THIS DISPLAY HOW MANY RESULT IT GET
	echo "There are ".$result. " Results";


	// CHECK IF THE NUMBER OF RESULT GOTTEN IS MORE THAN 0 OR DIDN'T GET ANYTHING

	if ($result > 0) {
		
		//get the result 

		$getResult = mysqli_fetch_assoc($queryGetSearch);

			$tableSearch =  "<table class='table table-bordered table-striped'>";
          	$tableSearch .= "<tr>";
          	$tableSearch .= "<th>Date Posted</th>";
          	$tableSearch .= "<th>Goods Name</th>";
          	$tableSearch .= "<th>Type</th>";
          	$tableSearch .= "<th>Description</th>";
          	$tableSearch .= "<th>Name</th>";
          	$tableSearch .= "<th>Address</th>";
          	$tableSearch .= "<th>Sellers Type</th>";
          	$tableSearch .= "<th>Email</th>";
          	$tableSearch .= "</tr>";

		while ($getResult = mysqli_fetch_assoc($queryGetSearch)) {
			
			$tableSearch .= "<tr>";
          	$tableSearch .= "<td>{$getResult['post_date']}</td>";
          	$tableSearch .="<td>{$getResult['goods_name']}</td>";
          	$tableSearch .= "<td>{$getResult['category_type']}</td>";
          	$tableSearch .="<td>{$getResult['goods_description']}</td>";
          	$tableSearch .= "<td>{$getResult['lname']} . {$getResult['fname']}</td>";
          	$tableSearch .="<td>{$getResult['address']}</td>";
          	$tableSearch .= "<td>{$getResult['seller_type']}</td>";
          	$tableSearch .="<td>{$getResult['email']}</td>";
          	$tableSearch .= "</tr>";

		}

		$tableSearch .= "</table>";
		echo "$tableSearch";



	}else{

		echo "There is no result in the search";
	}


}






?>