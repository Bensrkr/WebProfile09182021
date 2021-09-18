<?php

if(isset($_POST['login-submit'])){

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid']; 
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)){
		header("Location: ../index.php?error=emptyfields");
	exit();


}else{


	$sql = "SELECT * FROM users WHERE username	=? OR email=?;"; // prepare the SQL STatement



	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("Location: ../index.php?error=sqlerror");
		exit();	
	}else{

		mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid); // apply the variables value in the column in sql statement

		mysqli_stmt_execute($stmt);


		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_fetch_assoc($result);	// will get the first matched row or record



		if ($row) {
			$pwdCheck = password_verify($password, $row['password']);

			if ($pwdCheck == true) {
				session_start();
				$_SESSION['userId'] = $row['id'];
				$_SESSION['userUid'] = $row['username'];

				header("Location: ../index.php?login=success");
				exit();	
			}else{
				header("Location: ../index.php?error=wrongpwd");	
				exit();	
			}
		}
		else{
			header("Location: ../index.php?error=nouser");
				exit();	
			}
		}
	}
}
else {
	header("Location: ../index.php");
	exit();
}