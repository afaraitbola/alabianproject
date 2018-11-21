

<?php
    session_start();
	require_once("db_config.php"); 
	session_destroy();
    header("location:index.php");
?>