<?php

if (isset($_GET['id'])) {
	include "dbh.inc.php";

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}
	$id = validate($_GET['id']);

	$sql	= "SELECT	* FROM	todolist WHERE id = $id";
	$result	= mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}else{
 	header("Location: read.php");
	}
}elseif (isset($_POST['updateTask'])) {
	include "dbh.inc.php";

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}

$name = validate($_POST['taskName']);
$id = validate($_POST['id']);

if (empty($name)) {
	header("Location: ../update.php?id=$id&error=Please enter a task");
}else{
	$sql = "UPDATE todolist SET task='$name' WHERE id = $id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: ../read.php?success=successfully updated");
	}else{
		header("Location: ../update.php?id=$id&error=unknown error occured&user_data");
	}
	}

}else{
 	header("Location: read.php");
}