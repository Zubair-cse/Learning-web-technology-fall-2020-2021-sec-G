<?php
	session_start();
	

	if(isset($_FILES['mypic'])){

		$mydir 	= "../assets/".$_FILES['mypic']['name'];
		$src	= $_FILES['mypic']['tmp_name'];

		if(move_uploaded_file($src, $mydir)){
			$_SESSION['img']= $_FILES['mypic']['name'];
			header('location: ../view/profile.php');
		}else{
			echo "error";
		}

	}else{
		echo "invalid request...";
	}

?>