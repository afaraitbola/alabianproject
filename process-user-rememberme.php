<?php

require_once('db_config.php');
require_once('functions.php');

    	$id = loggedIn();

if (isset($_POST['remember'])) {
        	
    	$days = 30;

    	setcookie('remember', $id, time() + ($days * 24 * 60 * 60 * 1000));
    
}
?>