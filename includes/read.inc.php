<?php

include	'dbh.inc.php';

$sql	= "SELECT	* FROM	todolist ORDER BY id DESC";
$result	= mysqli_query($conn, $sql);

?>