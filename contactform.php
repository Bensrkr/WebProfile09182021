<?php

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$Message = $_POST['Message'];

	$mailTo = "melvincabanes25@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$Message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");

}