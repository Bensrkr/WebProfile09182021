<?php


if(isset($_POST['submit'])){


$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "webprofile";

$mysqli= new mysqli($servername, $dBUsername, $dBPassword, $dBName);


$projectTitle = $_POST['project_title'];
$projectDesc = $_POST['project_description'];



$mysqli ->query("INSERT INTO projects (project_title, project_desc) VALUES	('$projectTitle','$projectDesc')") or
		die($mysqli->error);	

	if(empty($newTask)){

		header("Location: ../todolist.php?error=emptyfields&newtask=".$newTask);
		exit();
	}
}