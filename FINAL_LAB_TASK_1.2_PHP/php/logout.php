<?php


	setcookie('isValid', 'true', time()-1000, '/');
	header('location: ../view/login.php');

?>