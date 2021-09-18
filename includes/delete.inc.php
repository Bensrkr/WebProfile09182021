<?php
include 'dbh.inc.php';
if (isset($_GET['id'])) {
	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}

$id = validate($_GET['id']);

$sql = "DELETE FROM todolist WHERE id = $id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: ../read.php?success=successfully deleted");
	}else{
		header("Location: ../read.php?error=unknown error occured&user_data");
	}

}else{
	header("Location: ../read.php");
}