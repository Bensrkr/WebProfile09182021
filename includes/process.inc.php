<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "webprofile";

$mysqli= new mysqli($servername, $dBUsername, $dBPassword, $dBName);

$update = false;
$task = '';

if(isset($_POST['submit'])){

$result	= $mysqli->query("SELECT * FROM	todolist") OR die($mysqli->error());


$newTask = $_POST['task_name'];

$mysqli ->query("INSERT INTO todolist (task) VALUES	('$newTask')") or
		die($mysqli->error);	

	if(empty($newTask)){

		header("Location: ../todolist.php?error=emptyfields&newtask=".$newTask);
		exit();
	}else{

		header("Location: ../todolist.php");
		exit();
	}
}

if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM todolist WHERE id = $id") or die($mysqli->error());
}
if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$result = $mysqli->query("SELECT * FROM todolist WHERE id = $id") or die($mysqli->error());

if(is_countable($result) &&count($result)==1){
	$row = $result->fetch_array();
	$task = $row['task_name'];
}
	if (isset($_POST['edit'])) {
		$id = $_POST['edit'];
		$task = $_POST['task_name'];

		$mysqli->query("UPDATE todolist SET task = '$newTask' WHERE id = $id") or die(mysqli->error);
	}

}
