<?php


 define("DBSERVER","localhost");
 define("DBUSER","root");
 define("DBPASS","");
 define("DBNAME","alabianproject");


$connect =  mysqli_connect(DBSERVER,DBUSER,DBPASS);

if (!$connect) {
	die("connection failed,unable to connect" .mysql_error($connect));
}


$db = mysqli_select_db($connect, DBNAME);

if (!$db) {
	
	die("unable to connect to te database" .mysql_error($connect));
}


?>