<?php 


if (isset($_POST['addProject'])) {
	include_once '../includes/dbh.inc.php';
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}

$name = validate($_POST['projectTitle']);
$desc = validate($_POST['projectDesc']);
$user_data = 'projectTitle=' .$name. '&projectDesc' .$desc;

if (empty($name)) {
	header("Location: ../projects.php?error=Please enter a title&user_data");
	}elseif(empty($desc)){
		header("Location: ../projects.php?error=enter a project description&user_data");
	
	}else{
	$sql = "INSERT INTO projects(project_title, project_desc) VALUES('$name', '$desc')";
	$result = mysqli_query($conn, $sql);

if ($result) {
		header("Location: ../readproject.php?success=successfully created");
}else{
		header("Location: ../projects.php?error=unknownerroroccured&user_data");
	}
	}
}

?>