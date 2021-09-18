<?php //create.inc.php


if (isset($_POST['addTask'])) {
	include_once '../includes/dbh.inc.php';
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}

$name = validate($_POST['taskName']);
$user_data = 'taskName=' .$name;

if (empty($name)) {
	header("Location: ../create.php?error=input task is required&user_data");
	}else{
	$sql = "INSERT INTO todolist(task) VALUES('$name')";
	$result = mysqli_query($conn, $sql);

if ($result) {
		header("Location: ../read.php?success=successfully created");
}else{
		header("Location: ../create.php?error=unknownerroroccured&user_data");

	}
	}
}

?>