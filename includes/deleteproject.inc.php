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

$sql = "DELETE FROM projects WHERE id = $id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: ../readproject.php?success=successfully deleted");
	}else{
		header("Location: ../readproject.php?error=unknown error occured&user_data");
	}

}else{
	header("Location: ../read.php");
}