<?php

	require_once('../db/db.php');
	require_once('../service/addEmployee.php');


	if(isset($_POST['submit'])){

		//declaration
		$ename 	= $_POST['employeename'];
		$uname 	= $_POST['username'];
		$cont 	= $_POST['contactno'];
		$pass 	= $_POST['password'];

		//validation
		if($uname == ""&&$ename == ""&&$cont == ""&&$pass == ""){
			
			header('location: ../view/login.php?msg=null_username');

		}

		}else{

			$conn = getConnection();
			$sql = ;
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				session_start();
				$_SESSION['username']  = $uname;
				setcookie('isValid', 'true', time()+3600, '/');
				header('location: ../view/home.php');
			}else{
				header('location: ../view/login.php?msg=invalid_user');
			}
		}
	}else{
		header('location: login.php');
	}
?>