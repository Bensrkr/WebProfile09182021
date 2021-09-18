<?php

include	'dbh.inc.php';

$sql	= "SELECT	* FROM	projects ORDER BY id DESC";
$result	= mysqli_query($conn, $sql);

?>