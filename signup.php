<?php 

	include_once 'header.php';


?>
<body>
	
	<h1><strong>SIGN UP!</strong></h1><br>
<div class="left2 col-sm-4"></div>
<div class="signupbox col-sm-4" 
	 align="center">

	<?php

			error_reporting(0);
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "emptyfields") {
				
			echo '<p class = "signuperror">Please! fill in the fields</p>';
			}
			elseif ($_GET['error'] == "invaliduidmail") {
				echo '<p class = "signuperror">Invalid username and email</p>';
			
			}
			elseif ($_GET['error'] == "invaliduid") {
				echo '<p class = "signuperror">Invalid username</p>';
			
			}
			elseif ($_GET['error'] == "invalidmail") {
				echo '<p class = "signuperror">Invalid email</p>';
			
			}
			elseif ($_GET['error'] == "passwordcheck") {
				echo '<p class = "signuperror">Your password do not match!</p>';
			
			}
			elseif ($_GET['error'] == "usertaken") {
				echo '<p class = "signuperror">Username is already taken!</p>';
			}			
									}

			elseif($_GET['signup'] == "success") {
				echo '<p class = "signupsuccess">Signup successful!</p>';

		}
	
	?>
	<form action="includes/signup.inc.php" 
		  method="post">
		<input type="text" 
			   name="uid" 
			   placeholder="Username"><br><br>
		<input type="text" 
			   name="mail" 
			   placeholder="E-mail"><br><br>
		<input type="password" 
			   name="pwd" 
			   placeholder="Password"><br><br>
		<input type="password" 
			   name="pwd-repeat" 
			   placeholder="Repeat password"><br><br>
		<button type="submit" 
				name="signup-submit"  
				class="btn btn-primary btn-block">Submit</button>
	</form>	
</div>
<div class="right2 col-sm-4"></div>
</body>