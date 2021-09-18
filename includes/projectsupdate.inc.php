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

	$sql	= "SELECT	* FROM	projects WHERE id = $id";
	$result	= mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}else{
 	header("Location: readproject.php");
	}
}elseif (isset($_POST['updateProject'])) {
	include "dbh.inc.php";

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}

$name = validate($_POST['projectTitle']);
$desc = validate($_POST['projectDesc']);
$id = validate($_POST['id']);


if (empty($name)) {
	header("Location: ../updateproject.php?id=$id&error=Please enter a title");
}elseif(empty($desc)){
		header("Location: ../updateproject.php?id=$id&error=enter a project description");
	}else{

	$sql = "UPDATE projects SET project_title='$name', project_desc = '$desc' WHERE id = $id";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		header("Location: ../readproject.php?success=successfully updated");
	}else{
		header("Location: ../updateproject.php?id=$id&error=unknown error occured&user_data");
	}
	}

}else{
 	header("Location: read.php");
}