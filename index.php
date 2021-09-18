<?php
	include_once('header.php');

?>

<body>

	<div class="container-fluid">
		<div class="row">

	<?php
		if (isset($_SESSION['userId'])) {
			echo '<p class="login-status">You are logged in!</p>';
		}
		else {
			echo '<p class="login-status">You are logged out!</p>';	
		}
	?>

			<p align="center">
			<img class="img-responsive img-rounded" 
				 src="Img/Melvin.png"></p>
		</div>

		<div class="row">
			<p><h1><strong>HI! I'M BEN</strong></h1></p>
			<p><h2>An aspiring Software Developer. With a 2 years experience as an IT Staff. I Graduated with a degree of BS in Information Technology.I do love editing images, troubleshooting computer hardware and software problems, and programming. I enjoy doing this things because of limitless discovery.</h2></p>
		</div>	
	</div>	


</body>